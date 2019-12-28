<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/28
 * Time: 16:06
 * Source: ApplyBindAcctResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\ResponseAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class ApplyBindAcctResponse extends BaseResponseAttribute
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
     * @SerializedName("result")
     * @JMS\Type("string")
     */
    protected $result;

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

}