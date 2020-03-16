<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 10:00
 * Source: PayFrontSmsResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class PayFrontSmsResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("target_url")
     * @JMS\Type("string")
     */
    protected $target_url;

    /**
     * @return string
     */
    public function getTargetUrl(): string
    {
        return $this->target_url;
    }
}
