<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/2/22
 * Time: 10:44
 * Source: UnbindBankCardRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\RequestAttribute;


use Zeevin\Libaip\Core\BaseRequestAttribute;
use JMS\Serializer\Annotation as JMS;

class UnbindBankCardRequest extends BaseRequestAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $biz_user_id;

    /**
     *
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
     * @param  mixed  $biz_user_id
     *
     * @return UnbindBankCardRequest
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->card_no;
    }

    /**
     * @param  mixed  $card_no
     *
     * @return UnbindBankCardRequest
     */
    public function setCardNo($card_no)
    {
        $this->card_no = $card_no;

        return $this;
    }
}