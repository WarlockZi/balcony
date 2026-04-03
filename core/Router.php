<?php

namespace core;

class Router
{
    public function __construct(
        private array $routes = [
            'lodgii'=>'/lodgii/',
            'windows'=>'/windows/',
            'kottedzhi-i-doma'=>'/kottedzhi-i-doma/',
            'service'=>'/service/',
            'dopolnitelno'=>'/dopolnitelno/',
            'accii'=>'/accii/',
            'ajax'=>'/ajax/',
            'index'=>'/\//',
        ],
        private Route $route = new Route(),
    )
    {
        $this->route->setUri($_SERVER['REDIRECT_URL']);
        $this->route->setMethod($_SERVER['REQUEST_METHOD']);
        if ($this->routeFound()) {

            $url = $this->route->page;
            if ($url==='ajax'){
                if (Ajax::handle($url))
                exit();
            }

            $path = PAGE."{$url}.php";
            ob_start();
            include $path;
            $content = ob_get_clean();

            ob_start();
            include '../layouts/layout.php';
            $layout = ob_get_clean();
            exit($layout);
        }
    }

    private function routeFound(): bool
    {
        $found = false;
        foreach ($this->routes as $page=>$pattern) {
            if ($found) break;
            $matches = preg_match($pattern, $this->route->getUri(), $ma);
            if ($matches) {
                $found             = true;
                $this->route->page = $page;
            }
        }

        return $found;
    }

}