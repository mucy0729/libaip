<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 18:25
 * Source: createMember.php
 * Project: libaip
 */
require './bootstrap.php';
$config = require './config.php';

$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\User\RequestAttribute\CreateMemberRequest();
$ext = $request->setMemberType(3)->setSource(1)->getProjectExtension();
$ext->setProjectUserId('test_'.bin2hex(random_bytes(10)));
$client = $app->user_createMember;
//echo $request;exit;
$ret = $client->request($request)->getResult();

var_dump($ret);
