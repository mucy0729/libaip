<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 20:57
 * Source: CreateMemberResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\ResponseAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class CreateMemberResponse extends BaseResponseAttribute
{
    /**
     * 通联用户ID
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("user_id")
     * @JMS\Type("string")
     */
    protected $user_id;
    /**
     * 通联用户ID
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

}