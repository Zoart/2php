<?php
class Route
{
  static function start()
  {
    // контроллер и действие по умолчанию
    $controller_name = 'Main';
    $action_name = 'index';

    $routes = explode('/', $_SERVER['REQUEST_URI']);

    // получаем имя контроллера
    if (!empty($routes[1]) ) 
    {
      $controller_name = $routes[2];
    }

    // получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

    $model_name = 'Model_'.$controller_name;
    $controller_name = 'Controller_' .$controller_name;
    $action_name = 'action_' .$action_name;

  }
}