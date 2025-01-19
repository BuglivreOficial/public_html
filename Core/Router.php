<?php

namespace Core;

class Router {

    private static $routes = [];
    public static function get(string $path, string $callback) {
        self::$routes = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'GET'
        ];
    }

    public static function post(string $path, string $callback) {
        self::$routes = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'POST'
        ];
    }

    public static function put(string $path, string $callback) {
        self::$routes = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'PUT'
        ];
    }

    public static function delete(string $path, string $callback) {
        self::$routes = [
            'path' => $path,
            'callback' => $callback,
            'method' => 'DELETE'
        ];
    }
    public static function start() {

    }
}