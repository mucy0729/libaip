<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/9
 * Time: 19:21
 * Source: SignalAgentPay.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core\Struct\ProjectExtension;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class SignalAgentPay
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_id")
     * @JMS\Type("string")
     */
    protected $project_order_id;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_type")
     * @JMS\Type("string")
     */
    protected $project_order_type;
    protected $arrears_list;
    protected $inviter_biz_user_id;
    protected $inviter_project_user_id;
    protected $inviter_project_user_type;
}