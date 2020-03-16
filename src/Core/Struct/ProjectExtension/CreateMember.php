<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:51
 * Source: ProjectExtension.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core\Struct\ProjectExtension;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class CreateMember
{
    /**
     * 项目用户ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("project_user_id")
     * @JMS\Type("string")
     */
    protected $project_user_id;

    /**
     * @return string
     */
    public function getProjectUserId()
    {
        return $this->project_user_id;
    }

    /**
     * @param string $project_user_id
     *
     * @return $this
     */
    public function setProjectUserId(string $project_user_id)
    {
        $this->project_user_id = $project_user_id;

        return $this;
    }
}
