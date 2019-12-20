<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 14:15
 * Source: PayFrontSmsClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\PayFrontSmsResponse;

/**
 * Class PayFrontSmsClient
 *
 * @method PayFrontSmsResponse getResult($format = 'object')
 * @package Zeevin\Libaip\Order
 */
class PayFrontSmsClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'payFrontSms';
}