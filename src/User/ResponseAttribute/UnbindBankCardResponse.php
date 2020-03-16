<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/2/22
 * Time: 10:46
 * Source: UnbindBankCardResponse.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\ResponseAttribute;

use JMS\Serializer\Annotation as JMS;
use Zeevin\Libaip\Core\BaseResponseAttribute;

class UnbindBankCardResponse extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $card_no;

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
    public function getCardNo()
    {
        return $this->card_no;
    }
}
