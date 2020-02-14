<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 17:29
 * Source: ConsumeProtocolApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\ConsumeProtocolApplyResponse;

/**
 * Class ConsumeProtocolApplyClient
 * @method ConsumeProtocolApplyResponse getResult($format = 'object', $extendNameSpace = null)
 *
 * @package Zeevin\Libaip\Order
 */
class ConsumeProtocolApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'consumeProtocolApply';
}