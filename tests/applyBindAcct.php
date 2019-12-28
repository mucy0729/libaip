<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/28
 * Time: 16:58
 * Source: applyBindAcct.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';
$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\User\RequestAttribute\ApplyBindAcctRequest();
$request->setBizUserId('8ab59c1e-2954-11ea-9a9c-00163e3219ba')->setAcct('test');

$client = $app->user_applyBindAcct;
$ret = $client->request($request)->getResult();

var_dump($ret);