<?php

namespace Core\Router;

/**
 * Summary of Router
 */
class Router
{

    /**
     * Summary of routes
     * @var array
     */
    private static $routes = [];

    /**
     * Summary of get
     * @param string $path
     * @param string $callback
     * @return void
     */
    public static function get(string $path, string $callback)
    {
        self::$routes[] = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'GET'
        ];
    }

    /**
     * Summary of post
     * @param string $path
     * @param string $callback
     * @return void
     */
    public static function post(string $path, string $callback)
    {
        self::$routes[] = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'POST'
        ];
    }

    /**
     * Summary of put
     * @param string $path
     * @param string $callback
     * @return void
     */
    public static function put(string $path, string $callback)
    {
        self::$routes[] = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'PUT'
        ];
    }

    /**
     * Summary of delete
     * @param string $path
     * @param string $callback
     * @return void
     */
    public static function delete(string $path, string $callback)
    {
        self::$routes[] = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'DELETE'
        ];
    }

    /**
     * Summary of start
     * @return void
     */
    public static function start()
    {
        echo '<hr>';
        echo '<h2> Rotas definidas: </h2>';
        print_r(self::$routes);
        echo '<hr>';
        echo '<h2> Método da rota requisitada:</h2>';
        echo $_SERVER['REQUEST_METHOD'];
        echo '<hr>';
        echo '<h2> Rota chamada: </h2>';
        print_r(parse_url($_SERVER['REQUEST_URI']));
    }


}