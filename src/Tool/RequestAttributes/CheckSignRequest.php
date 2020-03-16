<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/29
 * Time: 16:29
 * Source: CheckSignRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Tool\RequestAttributes;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class CheckSignRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sign")
     * @JMS\Type("string")
     */
    protected $sign;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timestamp")
     * @JMS\Type("string")
     */
    protected $timestamp;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("rps")
     * @JMS\Type("string")
     */
    protected $rps;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sysid")
     * @JMS\Type("string")
     */
    protected $sysid;

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param mixed $sign
     *
     * @return CheckSignRequest
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     *
     * @return CheckSignRequest
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRps()
    {
        return $this->rps;
    }

    /**
     * @param mixed $rps
     *
     * @return CheckSignRequest
     */
    public function setRps($rps)
    {
        $this->rps = $rps;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSysid()
    {
        return $this->sysid;
    }

    /**
     * @param mixed $sysid
     *
     * @return CheckSignRequest
     */
    public function setSysid($sysid)
    {
        $this->sysid = $sysid;

        return $this;
    }
}
