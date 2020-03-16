<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/9
 * Time: 19:17
 * Source: SignalAgentPayRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\SignalAgentPay;

class SignalAgentPayRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $fee;
    /**
     * @SerializedName("collect_pay_list")
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $collect_pay_list;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $goods_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $biz_goods_no;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $summary;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $extend_info;
    /**
     * @var SignalAgentPay
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\SignalAgentPay")
     */
    protected $project_extension;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<array>")
     */
    protected $split_rule_list;

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @param mixed $biz_user_id
     *
     * @return SignalAgentPayRequest
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return SignalAgentPayRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     *
     * @return SignalAgentPayRequest
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollectPayList()
    {
        return $this->collect_pay_list;
    }

    /**
     * @param mixed $collect_pay_list
     *
     * @return SignalAgentPayRequest
     */
    public function setCollectPayList($collect_pay_list)
    {
        $this->collect_pay_list = $collect_pay_list;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoodsType()
    {
        return $this->goods_type;
    }

    /**
     * @param mixed $goods_type
     *
     * @return SignalAgentPayRequest
     */
    public function setGoodsType($goods_type)
    {
        $this->goods_type = $goods_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBizGoodsNo()
    {
        return $this->biz_goods_no;
    }

    /**
     * @param mixed $biz_goods_no
     *
     * @return SignalAgentPayRequest
     */
    public function setBizGoodsNo($biz_goods_no)
    {
        $this->biz_goods_no = $biz_goods_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     *
     * @return SignalAgentPayRequest
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extend_info;
    }

    /**
     * @param mixed $extend_info
     *
     * @return SignalAgentPayRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return SignalAgentPay
     */
    public function getProjectExtension(): SignalAgentPay
    {
        if (!$this->project_extension instanceof SignalAgentPay) {
            $this->project_extension = new SignalAgentPay();
        }

        return $this->project_extension;
    }

    /**
     * @return mixed
     */
    public function getSplitRuleList()
    {
        return $this->split_rule_list;
    }

    /**
     * @param mixed $split_rule_list
     *
     * @return SignalAgentPayRequest
     */
    public function setSplitRuleList($split_rule_list)
    {
        $this->split_rule_list = $split_rule_list;

        return $this;
    }
}
