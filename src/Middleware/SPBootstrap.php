<?php

namespace SmartPage\Middleware;
use Dappur\Middleware\Middleware as Middleware;

/**
 * [SPBootstrap Middleware]
 * -> Később ezt a fájlt innen ki kell venni, és át rakni a csomagomba....!!!!
 */
class SPBootstrap extends Middleware
{
    public function __invoke($request, $response, $next)
    {		
			/**
			 * Add SP Dependencies to the Global Enviroment
			 * @var [$this->container]
			 */
      $this->view->getEnvironment()->addGlobal('conf', $this->conf);
			
			/**
			 * Add SP TwigExtionsons to the Global Enviroment
			 * @var [$this->container]
			 */
			$this->view->addExtension(new \SmartPage\TwigExtension\SPHelpers($this->container['request']));
			
			/** 
			 * [Add Custom Path to TwigView]
			 * @var [type]
			 */
			
			 $sp_tpls = $this->container['conf']->glob('init.sp');
			 $this->view->getEnvironment()->getLoader()->prependPath($sp_tpls, 'sp');
      
			
			
			return $next($request, $response);
    }
}