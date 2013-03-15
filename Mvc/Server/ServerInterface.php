<?php

namespace TE\Mvc\Server;

use TE\Mvc\Router\RouterInterface as Router;
use TE\Mvc\Action\Interceptor\InterceptorManagerInterface as InterceptorManager;

/**
 * ServerInterface 
 * 
 * @copyright Copyright (c) 2012 Typecho Team. (http://typecho.org)
 * @author Joyqi <magike.net@gmail.com> 
 * @license GNU General Public License 2.0
 */
interface ServerInterface
{
    public function __construct(Router $router, InterceptorManager $manager);
}

