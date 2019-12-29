<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/29
 * Time: 16:36
 * Source: ServiceProvider.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Tool;


use Pimple\Container;
use Pimple\ServiceProviderInterface;


class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param  Container  $app
     */
    public function register(Container $app)
    {
        $app['tool_checkSign'] = function ($app) {
            return new CheckSignClient($app);
        };

    }
}