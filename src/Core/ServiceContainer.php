<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 16:44
 * Source: ServiceContainer.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core;


use Pimple\Container;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;

class ServiceContainer extends Container
{
    protected $providers = [];

    protected $defaultConfig = [];

    protected $globalConfig = [
        //\GuzzleHttp\Client __construct params
        'http' => [
            'timeout' => 10,
        ]
    ];

    public function __construct(array $config = array(),array $prepends = [])
    {
        parent::__construct($prepends);
        $this->registerConfig($config)
            ->registerProviders()
            ->registerRequest()
            ->registerHttpClient();
    }


    /**
     * @see \GuzzleHttp\Client __construct
     * @return $this
     */
    protected function registerHttpClient()
    {
        isset($this['http_client']) || $this['http_client'] = function ($app) {
            return new Client($app['config']->get('http'));
        };

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerRequest()
    {
        isset($this['request'])
        || $this['request'] = function () {
            return Request::createFromGlobals();
        };

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider);
        }

        return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
    protected function registerConfig(array $config)
    {
        $this['config'] = function () use ($config) {
            return new Config(
                array_replace_recursive(
                    $this->globalConfig,
                    $this->defaultConfig,
                    $config
                )
            );
        };

        return $this;
    }
}