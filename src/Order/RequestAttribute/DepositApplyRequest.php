<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/18
 * Time: 11:16
 * Source: DepositApplyRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class DepositApplyRequest extends BaseRequestAttribute
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
    protected $fee = 0;
    /**
     *
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("order_expire_datetime")
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $order_expire_datetime;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pay_method")
     * @JMS\Type("array<string,array>")
     */
    protected $pay_method;
    /**
     *
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("goods_name")
     * @JMS\Type("string")
     */
    protected $goods_name;
    /**
     * 来源 1.移动端 2.pc端
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("source")
     * @JMS\Type("integer")
     */
    protected $source = 1;
    /**
     *
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("summary")
     * @JMS\Type("string")
     */
    protected $summary;
    /**
     *
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("extend_info")
     * @JMS\Type("string")
     */
    protected $extend_info;
    /**
     *
     * @JMS\SkipWhenEmpty
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_extension")
     * @JMS\Type("array")
     */
    protected $project_extension;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("account_set_no")
     * @JMS\Type("string")
     */
    protected $account_set_no;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("front_url")
     * @JMS\Type("string")
     */
    protected $front_url;

    /**
     * @return string
     */
    public function getBizUserId(): string
    {
        return $this->biz_user_id;
    }

    /**
     * @param  string  $biz_user_id
     *
     * @return $this
     */
    public function setBizUserId(string $biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param  int  $amount
     *
     * @return $this
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param  int  $fee
     *
     * @return $this
     */
    public function setFee(int $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderExpireDatetime(): string
    {
        return $this->order_expire_datetime;
    }

    /**
     * @param  string  $order_expire_datetime
     *
     * @return $this
     */
    public function setOrderExpireDatetime(string $order_expire_datetime)
    {
        $this->order_expire_datetime = $order_expire_datetime;

        return $this;
    }

    /**
     * @return array
     */
    public function getPayMethod(): array
    {
        return $this->pay_method;
    }

    /**
     * @param  array  $pay_method
     *
     * @return $this
     */
    public function setPayMethod(array $pay_method)
    {
        $this->pay_method = $pay_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsName(): string
    {
        return $this->goods_name;
    }

    /**
     * @param  string  $goods_name
     *
     * @return $this
     */
    public function setGoodsName(string $goods_name)
    {
        $this->goods_name = $goods_name;

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
     * @return $this
     */
    public function setSource(int $source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param  string  $summary
     *
     * @return $this
     */
    public function setSummary(string $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtendInfo(): string
    {
        return $this->extend_info;
    }

    /**
     * 数组会转化成json字符串
     *
     * @param  string|array  $extend_info
     *
     * @return $this
     */
    public function setExtendInfo($extend_info)
    {
        $this->extend_info = is_array($extend_info) ? json_encode($extend_info) : $extend_info;

        return $this;
    }

    /**
     * @return array
     */
    public function getProjectExtension(): array
    {
        return $this->project_extension;
    }

    /**
     * @param  array  $project_extension
     *
     * @return $this
     */
    public function setProjectExtension(array $project_extension)
    {
        $this->project_extension = $project_extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountSetNo(): string
    {
        return $this->account_set_no;
    }

    /**
     * @param $account_set_no
     *
     * @return $this
     */
    public function setAccountSetNo(string $account_set_no)
    {
        $this->account_set_no = $account_set_no;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrontUrl(): string
    {
        return $this->front_url;
    }

    /**
     * @param  string  $front_url
     *
     * @return $this
     */
    public function setFrontUrl(string $front_url)
    {
        $this->front_url = $front_url;

        return $this;
    }

}