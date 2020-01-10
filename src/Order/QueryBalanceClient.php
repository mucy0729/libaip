<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 16:51
 * Source: QueryBalanceClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\QueryBalanceResponse;

/**
 * Class QueryBalanceClient
 *
 * @method QueryBalanceResponse getResult($format = 'object', $extendNameSpace = null)
 * @package Zeevin\Libaip\Order
 */
class QueryBalanceClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'queryBalance';
}