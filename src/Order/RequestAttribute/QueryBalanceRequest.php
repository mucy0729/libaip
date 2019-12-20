<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 15:53
 * Source: QueryBalanceRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class QueryBalanceRequest extends BaseRequestAttribute
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
     * @SerializedName("account_set_no")
     * @JMS\Type("string")
     */
    protected $account_set_no;

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
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountSetNo()
    {
        return $this->account_set_no;
    }

    /**
     * @param $account_set_no
     *
     * @return $this
     */
    public function setAccountSetNo($account_set_no)
    {
        $this->account_set_no = $account_set_no;
        return $this;
    }


}