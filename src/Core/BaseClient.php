<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 16:37
 * Source: BaseClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Zeevin\Libaip\Core\Crypt\AES;
use Zeevin\Libaip\Core\Crypt\RSA;
use Zeevin\Libaip\Handler\LibAipException;

/**
 * Class BaseClient
 *
 *
 * @package Zeevin\Libaip\Core
 */
abstract class BaseClient
{
    protected $app;
    protected $config;
    protected $response;
    protected $result;
    protected $httpErrors = [];
    protected $client = 'libaip';
    protected $version = '1.0';
    protected $method = 'POST';
    protected $time;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->time = time();
        $this->config = $app['config'];
    }

    /**
     * @param  string  $body
     *
     * @return $this
     * @throws LibAipException
     */
    public function request(string $body = '')
    {
        $method = strtoupper($this->getMethod());
        try {
            $this->response = $this->getHttpClient()->request(
                $method,
                $this->getId(),
                [
                    'body'    => $this->packRequestSkeleton($body),
                    'verify'  => false,
                    'headers' => $this->getHeaders(),
                ]

            );
        } catch (ClientException $e) {
            $this->httpErrors = [
                'statusCode'   => $e->getCode(),
                'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
            ];

            $message = (array)json_decode($e->getResponse()->getBody()->getContents(), true);
            $this->httpErrors = array_merge($this->httpErrors, $message);
        } catch (\Throwable $e) {
            throw new LibAipException('gateway request failed');
        }

        return $this;
    }

    /**
     * @param  string  $data
     *
     * @return false|string
     * @throws \Zeevin\Libaip\Handler\LibAipException
     */
    protected function packRequestSkeleton(string $data)
    {
        $skeleton = [
            'content' => [
                'base' => [
                    'time'      => $this->time,
                    'source'    => $this->config->get('source'),
                    'equipment' => $this->config->get('equipment'),
                    'token'     => $this->config->get('token'),
                    'version'   => $this->getVersion(),
                ],
                'data' => json_decode($data, true),
            ],
            'app_key' => $this->config->get('app_key'),
            'time'    => $this->time,

        ];
        $this->encrypt($skeleton);

        return json_encode($skeleton);
    }

    /**
     * @param $skeleton
     *
     * @throws \Zeevin\Libaip\Handler\LibAipException
     */
    protected function encrypt(&$skeleton)
    {
        AES::setIv($this->config->get('aes')['iv']);
        list($content, $lock) = AES::encrypt($skeleton['content'] ?? '');
        RSA::setPublicKey($this->config->get('public_key_path'));
        $lock = RSA::encrypt($lock);

        $skeleton['lock'] = $lock;
        $skeleton['content'] = $content;
    }

    /**
     * @param $data
     *
     * @return false|string
     * @throws LibAipException
     */
    protected function decrypt($data)
    {
        if (!isset($data['lock']) || empty($data['lock'])) {
            return $data;
        }
        $data = is_string($data) ? json_decode($data, true) : $data;
        $data['lock'] = RSA::decrypt($data['lock']);
        AES::setKey($data['lock']);
        $content = AES::decrypt($data['content']);
        unset($data['content']);

        return json_encode(array_merge($data, $content));
    }

    public function getResult($format = 'object')
    {
        if (empty($this->httpErrors)) {
            $body_array = json_decode((string)$this->response->getBody(), true);
            $body_array['statusCode'] = $this->response->getStatusCode();
            $body_array['reasonPhrase'] = $this->response->getReasonPhrase();
        } else {
            $body_array = $this->httpErrors;
        }
        $body = $this->decrypt($body_array);
        if ($format == 'json' ) {
            $this->result = $body;
        } elseif ($format == 'array') {
            $this->result = json_decode($body, true);
        } elseif ($format == 'object') {
            if ($body_array['status'] != 200)
                $object = 'Zeevin\Core\BaseResponseAttribute';
            else
                $object = 'Zeevin\Libaip\\'.ucfirst($this->getDomain()).'\ResponseAttribute\\'.ucfirst($this->getId()).'Response';

            $this->result = $this->deserialize($body, $object, 'json');
        }

        return $this->result;
    }

    /**
     * @return Client
     */
    protected function getHttpClient(): Client
    {
        return $this->app['http_client'];
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        $headers = ['User-Agent' => $this->client];
        $headers['Content-Type'] = 'application/json';

        return $headers;
    }

    protected function deserialize($data, $object, $format)
    {
        if (is_array($data))
            $data =json_encode($data);
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $object = class_exists($object) ? $object : BaseResponseAttribute::class;

        return $serializer->deserialize($data, $object, $format);
    }

    /**
     * @return string
     */
    protected function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    protected function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    protected function getId(): string
    {
        return $this->id;
    }

}