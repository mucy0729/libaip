<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/18
 * Time: 13:54
 * Source: DepositApplyResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\ResponseAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class DepositApplyResponse extends BaseResponseAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("order_no")
     * @JMS\Type("string")
     */
    protected $order_no;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_info")
     * @JMS\Type("string")
     */
    protected $pay_info;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_order_no")
     * @JMS\Type("string")
     */
    protected $biz_order_no;

    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extend_info;
    }

    /**
     * @return mixed
     */
    public function getPayInfo()
    {
        return $this->pay_info;
    }

    /**
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->biz_order_no;
    }

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

}