<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 17:29
 * Source: ConsumeApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\ConsumeApplyResponse;

/**
 * Class ConsumeApplyClient
 * @method ConsumeApplyResponse getResult($format = 'object', $extendNameSpace = null)
 *
 * @package Zeevin\Libaip\Order
 */
class ConsumeApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'consumeApply';
}