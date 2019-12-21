<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/18
 * Time: 13:34
 * Source: depositApply.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';
$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\DepositApplyRequest();

$request->setBizUserId('185e0584-14cd-11ea-b876-02424f051571')->setAmount(1)
    ->setAccountSetNo($app->config->get('account_set_no'))
    ->setFrontUrl('http://7ddv2.lo')
    ->setOrderExpireDatetime(new DateTime('+15 minutes'))
    ->setProjectExtension([
        'project_order_id'   => 'P_'.bin2hex(random_bytes(10)),
        'project_order_type' => 1,
    ])
    ->setPayMethod([
        'T0' => [
            'amount'  => $request->getAmount(),
            'paytype' => "B2C,B2B",
        ],
    ]);
$client = $app->order_depositApply;
//echo $request->serialize();
$ret = $client->request($request)->getResult();

var_dump($ret);