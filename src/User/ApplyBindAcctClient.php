<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/28
 * Time: 16:54
 * Source: ApplyBindAcctClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\ApplyBindAcctResponse;

/**
 * Class ApplyBindAcctClient.
 *
 * @method ApplyBindAcctResponse getResult($format = 'object', $extendNameSpace = null)
 */
class ApplyBindAcctClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'applyBindAcct';
}
