<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/16
 * Time: 17:21
 * Source: destroyMember.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';

$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\User\RequestAttribute\DestroyMemberRequest();
$ext = $request->setMemberType(2)->setBizUserId('b4e418c8-20ce-11ea-a2cb-02424f051571')->setProjectUserId('tee_000112');
$client = $app->user_destroyMember;
$ret = $client->request($request)->getResult();

var_dump($ret);