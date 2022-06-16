<?php
	namespace Core;
	
	class Router {
		public function getTrack($routes, $uri) {
            $u = explode('?', $uri);
			foreach ($routes as $route) {
                if ($route->path === $u[0]){
                    return new Track($route->controller, $route->action);
                }
			}
			return new Track('error', 'notFound');
		}

	}
	
	
