<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 16:15
 * Source: ConsumeProtocolApplyRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\ConsumeApply;

class ConsumeProtocolApplyRequest extends BaseRequestAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("payer_id")
     * @JMS\Type("string")
     */
    protected $payer_id;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("receiver_id")
     * @JMS\Type("string")
     */
    protected $receiver_id = '#yunBizUserId_B2C#';
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $amount;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $fee;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_method")
     * @JMS\Type("array")
     */
    protected $pay_method;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $source = 2;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $summary;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;

    /**
     * @var ConsumeApply
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\ConsumeApply")
     */
    protected $project_extension;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocol_no")
     * @JMS\Type("string")
     */
    protected $protocol_no;

    /**
     * @return mixed
     */
    public function getPayerId()
    {
        return $this->payer_id;
    }

    /**
     * @param  mixed  $payer_id
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setPayerId($payer_id)
    {
        $this->payer_id = $payer_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverId(): string
    {
        return $this->receiver_id;
    }

    /**
     * @param  string  $receiver_id
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setReceiverId(string $receiver_id): ConsumeProtocolApplyRequest
    {
        $this->receiver_id = $receiver_id;

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
     * @return ConsumeProtocolApplyRequest
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
     * @return ConsumeProtocolApplyRequest
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->pay_method;
    }

    /**
     * @param  mixed  $pay_method
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setPayMethod($pay_method)
    {
        $this->pay_method = $pay_method;

        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param  int  $source
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setSource(int $source): ConsumeProtocolApplyRequest
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
     * @return ConsumeProtocolApplyRequest
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
     * @param  mixed  $extend_info
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = $extend_info;

        return $this;
    }

    /**
     * @return ConsumeApply
     */
    public function getProjectExtension(): ConsumeApply
    {
        if (!$this->project_extension instanceof ConsumeApply)
            $this->project_extension = new ConsumeApply();
        return $this->project_extension;
    }

    /**
     * @return mixed
     */
    public function getProtocolNo()
    {
        return $this->protocol_no;
    }

    /**
     * @param  mixed  $protocol_no
     *
     * @return ConsumeProtocolApplyRequest
     */
    public function setProtocolNo($protocol_no)
    {
        $this->protocol_no = $protocol_no;

        return $this;
    }
}