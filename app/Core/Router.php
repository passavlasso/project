<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, callable|array $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $this->parseUri();

        foreach ($this->routes[$method] ?? [] as $route => $action) {

            $pattern = preg_replace('#\{[\w]+\}#', '([\w-]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);

                if (is_array($action)) {
                    [$class, $methodName] = $action;
                    $controller = new $class();
                    call_user_func_array([$controller, $methodName], $matches);
                    return;
                }

                call_user_func_array($action, $matches);
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }

    private function parseUri(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return rtrim($uri, '/') ?: '/';
    }
}