<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/9
 * Time: 18:50
 * Source: AgentCollectApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;

use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\AgentCollectApplyResponse;

/**
 * Class AgentCollectApplyClient.
 *
 * @method  AgentCollectApplyResponse getResult($format = 'object', $extendNameSpace = null)
 */
class AgentCollectApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'agentCollectApply';
}
