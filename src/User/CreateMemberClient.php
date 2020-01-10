<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:58
 * Source: CreateMemberClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\User\ResponseAttribute\CreateMemberResponse;

/**
 * Class CreateMemberClient
 *
 * @method CreateMemberResponse|mixed getResult($format = 'object', $extendNameSpace = null)
 * @package Zeevin\Libaip\User
 */
class CreateMemberClient extends BaseClient
{
    protected $domain = 'User';
    protected $id = 'createMember';
}