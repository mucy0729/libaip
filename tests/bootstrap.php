<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/19
 * Time: 17:51
 * Source: bootstrap.php
 * Project: libaip
 */

$loader = require '../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader,'loadClass']);