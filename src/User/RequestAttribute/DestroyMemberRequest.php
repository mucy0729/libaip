<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/16
 * Time: 17:15
 * Source: DestroyMemberRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class DestroyMemberRequest extends BaseRequestAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * 会员类型 2企业 3个人
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("integer")
     */
    protected $member_type;

    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $project_user_id;

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
     * @return DestroyMemberRequest
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemberType()
    {
        return $this->member_type;
    }

    /**
     * @param  mixed  $member_type
     *
     * @return DestroyMemberRequest
     */
    public function setMemberType($member_type)
    {
        $this->member_type = $member_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectUserId()
    {
        return $this->project_user_id;
    }

    /**
     * @param  mixed  $project_user_id
     *
     * @return DestroyMemberRequest
     */
    public function setProjectUserId($project_user_id)
    {
        $this->project_user_id = $project_user_id;

        return $this;
    }
}