<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:30
 * Source: BaseResponseAttribute.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class BaseResponseAttribute
{
    /**
     * 响应头信息statusCode
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("statusCode")
     * @JMS\Type("integer")
     */
    protected $statusCode;

    /**
     * 响应头信息reasonPhrase
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reasonPhrase")
     * @JMS\Type("string")
     */
    protected $reasonPhrase;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("msg")
     * @JMS\Type("string")
     */
    protected $msg;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return mixed
     */
    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }

    /**
     * @return string
     */
    public function getStatus() :string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMsg() :string
    {
        return $this->msg;
    }

    public function serialize($format = 'json')
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        if ($format == 'form-url-encode') {
            $json = $serializer->serialize($this, 'json');

            return http_build_query(json_decode($json, true));
        } else {
            return $serializer->serialize($this, $format);
        }

    }
}