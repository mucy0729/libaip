<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/2/22
 * Time: 10:47
 * Source: UnbindBankCardClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\UnbindBankCardResponse;

/**
 * Class UnbindBankCardClient.
 *
 * @method UnbindBankCardResponse getResult($format = 'object', $extendNameSpace = null)
 */
class UnbindBankCardClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'unbindBankCard';
}
