<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/29
 * Time: 16:39
 * Source: checkSign.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';

$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Tool\RequestAttributes\CheckSignRequest();
//print_r($_GET);exit;
$request->setRps($_GET['rps'])->setSign($_GET['sign'])->setSysid($_GET['sysid'])->setTimestamp($_GET['timestamp']);
$client = $app->tool_checkSign;
//echo $request;exit;
$ret = $client->request($request)->getResult();

var_dump($ret);