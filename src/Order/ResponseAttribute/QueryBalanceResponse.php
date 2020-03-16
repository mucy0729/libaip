<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 16:46
 * Source: QueryBalanceResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class QueryBalanceResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("all_amount")
     * @JMS\Type("integer")
     */
    protected $all_amount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("freezen_amount")
     * @JMS\Type("integer")
     */
    protected $freezen_amount;

    /**
     * @return mixed
     */
    public function getAllAmount()
    {
        return $this->all_amount;
    }

    /**
     * @return mixed
     */
    public function getFreezenAmount()
    {
        return $this->freezen_amount;
    }
}
