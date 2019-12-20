<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/18
 * Time: 11:02
 * Source: depositApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\DepositApplyResponse;

/**
 * Class DepositApplyClient
 *
 * @method  DepositApplyResponse|mixed getResult($format = 'object')
 * @package Zeevin\Libaip\Order
 */
class DepositApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'depositApply';
}