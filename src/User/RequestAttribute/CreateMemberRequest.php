<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:40
 * Source: createMember.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\RequestAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;
use Zeevin\Libaip\Core\Struct\ProjectExtension\CreateMember;

class CreateMemberRequest extends BaseRequestAttribute
{
    /**
     * 会员类型 2企业 3个人
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("member_type")
     * @JMS\Type("integer")
     */
    protected $member_type;
    /**
     * 来源 1.移动端 2.pc端
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("source")
     * @JMS\Type("integer")
     */
    protected $source;
    /**
     * @var createMember
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_extension")
     * @JMS\Type("Zeevin\Libaip\Core\Struct\ProjectExtension\CreateMember")
     */
    protected $project_extension;

    /**
     * @return mixed
     */
    public function getMemberType()
    {
        return $this->member_type;
    }

    /**
     * @param  int  $member_type
     *
     * @return $this
     */
    public function setMemberType(int $member_type)
    {
        $this->member_type = $member_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $source
     *
     * @return $this
     */
    public function setSource(int $source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return CreateMember
     */
    public function getProjectExtension(): CreateMember
    {
        if (!$this->project_extension instanceof CreateMember)
            $this->project_extension = new CreateMember();

        return $this->project_extension;
    }
}