<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 18:26
 * Source: Application.php
 * Project: libaip
 */

namespace Zeevin\Libaip;

use Zeevin\Libaip\Core\ServiceContainer;


/**
 * Class Application
 *
 * @property \DusanKasan\Knapsack\Collection $config;
 * @property \Zeevin\Libaip\User\CreateMemberClient $user_createMember
 * @property \Zeevin\Libaip\Order\DepositApplyClient $order_depositApply
 * @property \Zeevin\Libaip\Order\PayFrontSmsClient $order_payFrontSms
 * @property \Zeevin\Libaip\Order\QueryBalanceClient $order_queryBalance
 * @property \Zeevin\Libaip\Order\WithdrawApplyClient $order_withdrawApply
 * @property \Zeevin\Libaip\Order\ConsumeApplyClient $order_consumeApply
 * @property \Zeevin\Libaip\User\ApplyBindAcctClient $user_applyBindAcct
 * @property \Zeevin\Libaip\Tool\CheckSignClient $tool_checkSign
 * @property \Zeevin\Libaip\Order\AgentCollectApplyClient $order_agentCollectApply
 * @property \Zeevin\Libaip\User\DestroyMemberClient $user_destroyMember
 * @property \Zeevin\Libaip\Order\SingleAgentPayClient $order_singleAgentPay
 * @property \Zeevin\Libaip\Order\ConsumeProtocolApplyClient $order_consumeProtocolApply
 * @property \Zeevin\Libaip\User\UnbindBankCardClient $user_unbindBankCard
 *
 * @package Zeevin\Libaip
 */
class Application extends ServiceContainer
{
    protected $providers = [
        \Zeevin\Libaip\User\ServiceProvider::class,
        \Zeevin\Libaip\Order\ServiceProvider::class,
        \Zeevin\Libaip\Tool\ServiceProvider::class
    ];

    public function __get($name)
    {
        return $this[$name];
    }
}