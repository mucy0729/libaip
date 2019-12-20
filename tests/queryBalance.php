<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 14:08
 * Source: queryBalance.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';



$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\QueryBalanceRequest();

$request->setBizUserId('185e0584-14cd-11ea-b876-02424f051571')->setAccountSetNo(
    $app->config->get('account_set_no')
);

// var_dump($request);exit;
$client = $app->order_queryBalance;
$ret = $client->request($request)->getResult();

var_dump($ret);