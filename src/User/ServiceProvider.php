<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 18:10
 * Source: ServiceProvider.php
 * Project: libaip
 */

namespace Zeevin\Libaip\User;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param  Container  $app
     */
    public function register(Container $app)
    {
        $app['user_createMember'] = function ($app) {
            return new CreateMemberClient($app);
        };
    }
}