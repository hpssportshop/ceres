<?php //strict

namespace Ceres\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;

/**
 * Class CeresRouteServiceProvider
 * @package Ceres\Providers
 */
class CeresRouteServiceProvider extends RouteServiceProvider
{
	public function register()
	{
	}

    /**
     * Define the map routes to templates or REST resources
     * @param Router $router
     * @param ApiRouter $api
     */
	public function map(Router $router, ApiRouter $api, ConfigRepository $config)
	{
        $router->get('hockey', 'Ceres\Controllers\HockeyController@showHockey');
        $router->get('tennis', 'Ceres\Controllers\TennisController@showTennis');
                
        
	}
}