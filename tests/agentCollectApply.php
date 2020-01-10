<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 17:06
 * Source: consumeApply.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';
$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\AgentCollectApplyRequest();

$request->setPayerId($app->config->get('test_data')['company']['biz_user_id'])
    ->setAmount(1)
    ->setFee(0)
    ->setReceiverList([
        [
            'biz_user_id'=>'937a79fe-05b5-11ea-9404-02424f051571',
            'amount'=>1
        ]
    ])
    ->setFrontUrl('http://baidu.com')
    ->setPayMethod(
        [
            'T0' => [
                'amount'  => $request->getAmount(),
                'paytype' => "B2C,B2B",
            ],
        ])
    ->setOrderExpireDatetime(new DateTime('+15 minutes'))
    ->getProjectExtension()
    ->setProjectOrderType(111)
    ->setProjectOrderId('C_'.bin2hex(random_bytes(10)));

//echo $request;exit;

$ret = $app->order_agentCollectApply->request($request)->getResult();


var_dump($ret);