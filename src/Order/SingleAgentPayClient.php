<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/13
 * Time: 11:44
 * Source: SingleAgentPayClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\SignalAgentPayResponse;

/**
 * Class singleAgentPayClient.
 *
 * @method SignalAgentPayResponse getResult($format = 'object', $extendNameSpace = null)
 */
class SingleAgentPayClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'signalAgentPay';
}
