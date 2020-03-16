<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 09:22
 * Source: PayFrontSmsRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Symfony\Component\HttpFoundation\Request;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class PayFrontSmsRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_order_no")
     * @JMS\Type("string")
     */
    protected $biz_order_no;

    /**
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("verification_code")
     * @JMS\Type("string")
     */
    protected $verification_code;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("consumer_ip")
     * @JMS\Type("string")
     */
    protected $consumer_ip;

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @param $biz_user_id
     *
     * @return $this
     */
    public function setBizUserId(string $biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->biz_order_no;
    }

    /**
     * @param $biz_order_no
     *
     * @return $this
     */
    public function setBizOrderNo(string $biz_order_no)
    {
        $this->biz_order_no = $biz_order_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVerificationCode()
    {
        return $this->verification_code;
    }

    /**
     * @param $verification_code
     *
     * @return $this
     */
    public function setVerificationCode(string $verification_code)
    {
        $this->verification_code = $verification_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsumerIp()
    {
        return $this->consumer_ip;
    }

    /**
     * @param $consumer_ip
     *
     * @return $this
     */
    public function setConsumerIp(string $consumer_ip = '')
    {
        if (empty($consumer_ip)) {
            $request = new Request([], [], [], [], [], $_SERVER);
            $consumer_ip = $request->getClientIp();
        }
        $this->consumer_ip = $consumer_ip;

        return $this;
    }
}
