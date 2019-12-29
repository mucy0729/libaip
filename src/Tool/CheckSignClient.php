<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/29
 * Time: 16:37
 * Source: CheckSignClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Tool;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Tool\ResponseAttribute\CheckSignResponse;

/**
 * Class CheckSignClient
 * @method CheckSignResponse getResult($format = 'object')
 *
 * @package Zeevin\Libaip\Tool
 */
class CheckSignClient extends BaseClient
{
    protected $domain = 'Tool';
    protected $id = 'checkSign';
}