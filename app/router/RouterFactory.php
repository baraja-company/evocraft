<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
use Nette\Routing\Router;
use Nette\StaticClass;

final class RouterFactory
{

	use StaticClass;

	/**
	 * @return RouteList
	 */
	public static function createRouter(): RouteList
	{
		$router = new RouteList;

		$router[] = self::createFrontRouter();

		return $router;
	}

	/**
	 * @return RouteList
	 */
	private static function createFrontRouter(): RouteList
	{
		$router = new RouteList('Front');

		$router->addRoute('index.html', 'Homepage:default', Router::ONE_WAY);
		$router->addRoute('Info.html', 'Homepage:info', Router::ONE_WAY);
		$router->addRoute('Modlist.html', 'Homepage:modlist', Router::ONE_WAY);
		$router->addRoute('Instalace.html', 'Homepage:install', Router::ONE_WAY);
		$router->addRoute('informace', 'Homepage:info');
		$router->addRoute('instalace', 'Homepage:install');
		$router->addRoute('prehled-modu', 'Homepage:modlist');
		$router->addRoute('<presenter>/<action>', 'Homepage:default');

		return $router;
	}

}
