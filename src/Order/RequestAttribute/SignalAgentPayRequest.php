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

class SignalAgentPayRequest extends BaseRequestAttribute
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
     * @SerializedName("collect_pay_list")
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("array<string,string>")
     */
    protected $collect_pay_list;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $goods_type;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $biz_goods_no;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $summary;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $extend_info;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $project_extension;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $split_rule_list;
}