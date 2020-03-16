<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 11:26
 * Source: WithdrawApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\WithdrawApplyResponse;

/**
 * Class WithdrawApplyClient.
 *
 * @method WithdrawApplyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class WithdrawApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'withdrawApply';
}
