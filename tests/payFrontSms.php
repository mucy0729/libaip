<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 14:08
 * Source: payFrontSms.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';

$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\PayFrontSmsRequest();

$request->setBizUserId('185e0584-14cd-11ea-b876-02424f051571')
    ->setBizOrderNo('20191219141848543334')
    ->setConsumerIp();

//echo $request->serialize();exit;
$client = $app->order_payFrontSms;
$ret = $client->request($request)->getResult();

header('Location: '.$ret->getTargetUrl());