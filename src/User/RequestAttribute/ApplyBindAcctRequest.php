<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/28
 * Time: 15:56
 * Source: ApplyBindAcctRequest.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User\RequestAttribute;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libaip\Core\BaseRequestAttribute;

class ApplyBindAcctRequest extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("biz_user_id")
     * @JMS\Type("string")
     */
    protected $biz_user_id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("acct_type")
     * @JMS\Type("string")
     */
    protected $acct_type = 'AT02';
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("acct")
     * @JMS\Type("string")
     */
    protected $acct;

    /**
     * @return mixed
     */
    public function getBizUserId()
    {
        return $this->biz_user_id;
    }

    /**
     * @param mixed $biz_user_id
     *
     * @return ApplyBindAcctRequest
     */
    public function setBizUserId($biz_user_id)
    {
        $this->biz_user_id = $biz_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcctType()
    {
        return $this->acct_type;
    }

    /**
     * @param mixed $acct_type
     *
     * @return ApplyBindAcctRequest
     */
    public function setAcctType($acct_type)
    {
        $this->acct_type = $acct_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcct()
    {
        return $this->acct;
    }

    /**
     * @param mixed $acct
     *
     * @return ApplyBindAcctRequest
     */
    public function setAcct($acct)
    {
        $this->acct = $acct;

        return $this;
    }
}
