<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 10:28
 * Source: WithdrawApply.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core\Struct\ProjectExtension;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class WithdrawApply
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_id")
     * @JMS\Type("string")
     */
    protected $project_order_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_order_type")
     * @JMS\Type("string")
     */
    protected $project_order_type;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fee_detail")
     * @JMS\Type("array")
     */
    protected $fee_detail;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("arrears_list")
     * @JMS\Type("array<string,string>")
     */
    protected $arrears_list;

    /**
     * @return mixed
     */
    public function getProjectOrderId()
    {
        return $this->project_order_id;
    }

    /**
     * @param mixed $project_order_id
     *
     * @return WithdrawApply
     */
    public function setProjectOrderId($project_order_id)
    {
        $this->project_order_id = $project_order_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectOrderType()
    {
        return $this->project_order_type;
    }

    /**
     * @param mixed $project_order_type
     *
     * @return WithdrawApply
     */
    public function setProjectOrderType($project_order_type)
    {
        $this->project_order_type = $project_order_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeeDetail()
    {
        return $this->fee_detail;
    }

    /**
     * @param array $fee_detail
     *
     * @return WithdrawApply
     */
    public function setFeeDetail(array $fee_detail)
    {
        $this->fee_detail = $fee_detail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArrearsList()
    {
        return $this->arrears_list;
    }

    /**
     * @param mixed $arrears_list
     *
     * @return WithdrawApply
     */
    public function setArrearsList($arrears_list)
    {
        $this->arrears_list = $arrears_list;

        return $this;
    }
}
