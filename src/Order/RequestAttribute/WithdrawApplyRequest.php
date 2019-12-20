<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 09:45
 * Source: WithdrawApplyRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\WithdrawApply;

/**
 * Class WithdrawApplyRequest
 *
 * @package Zeevin\Libaip\Order\RequestAttribute
 */
class WithdrawApplyRequest extends BaseRequestAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("amount")
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fee")
     * @JMS\Type("integer")
     */
    protected $fee;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("source")
     * @JMS\Type("integer")
     */
    protected $source = 2;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("summary")
     * @JMS\Type("string")
     */
    protected $summary;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("bank_card_no")
     * @JMS\Type("string")
     */
    protected $bank_card_no;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("bank_card_pro")
     * @JMS\Type("string")
     */
    protected $bank_card_pro;
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
     * @SerializedName("validate_type")
     * @JMS\Type("integer")
     */
    protected $validate_type;

    /**
     * @var WithdrawApply
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_extension")
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\WithdrawApply")
     */
    protected $project_extension;

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @param  mixed  $biz_user_id
     *
     * @return WithdrawApplyRequest
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
     * @param  mixed  $amount
     *
     * @return WithdrawApplyRequest
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
     * @param  mixed  $fee
     *
     * @return WithdrawApplyRequest
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param  mixed  $source
     *
     * @return WithdrawApplyRequest
     */
    public function setSource($source)
    {
        $this->source = $source;

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
     * @param  mixed  $summary
     *
     * @return WithdrawApplyRequest
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankCardNo()
    {
        return $this->bank_card_no;
    }

    /**
     * @param  mixed  $bank_card_no
     *
     * @return WithdrawApplyRequest
     */
    public function setBankCardNo($bank_card_no)
    {
        $this->bank_card_no = $bank_card_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankCardPro()
    {
        return $this->bank_card_pro;
    }

    /**
     * @param  mixed  $bank_card_pro
     *
     * @return WithdrawApplyRequest
     */
    public function setBankCardPro($bank_card_pro)
    {
        $this->bank_card_pro = $bank_card_pro;

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
     * @param  mixed  $extend_info
     *
     * @return WithdrawApplyRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidateType()
    {
        return $this->validate_type;
    }

    /**
     * @param  mixed  $validate_type
     *
     * @return WithdrawApplyRequest
     */
    public function setValidateType($validate_type)
    {
        $this->validate_type = $validate_type;

        return $this;
    }

    /**
     * @return WithdrawApply
     */
    public function getProjectExtension(): WithdrawApply
    {
        if (!$this->project_extension instanceof WithdrawApply)
            $this->project_extension = new WithdrawApply();

        return $this->project_extension;
    }
}