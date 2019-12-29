<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/29
 * Time: 16:34
 * Source: CheckSignResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Tool\ResponseAttribute;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class CheckSignResponse extends BaseResponseAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("integer")
     */
    protected $result;

    /**
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }
}