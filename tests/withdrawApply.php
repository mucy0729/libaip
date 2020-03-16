<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 11:52
 * Source: withdrawApply.php
 * Project: libaip
 */
require './bootstrap.php';
$config = require './config.php';

$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\WithdrawApplyRequest();

$person = $app->config->get('test_data')['person'];

$request->setBizUserId($person['biz_user_id'])
    ->setAmount(1)
    ->setFee(0)
    ->setBankCardNo($person['bank_card_no'])
    ->setValidateType(0)
    ->getProjectExtension()->setProjectOrderId('W_'.bin2hex(random_bytes(6)))
    ->setProjectOrderType('107')
    ->setFeeDetail([['type' => 2, 'amount' => 0]]);

//echo  $request;exit;
$client = $app->order_withdrawApply;
$ret = $client->request($request)->getResult();
var_dump($ret);
