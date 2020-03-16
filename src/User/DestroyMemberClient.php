<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/16
 * Time: 17:18
 * Source: DestroyMemberClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\DestroyMemberResponse;

/**
 * Class DestroyMemberClient.
 *
 * @method DestroyMemberResponse getResult($format = 'object', $extendNameSpace = null)
 */
class DestroyMemberClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'destroyMember';
}
