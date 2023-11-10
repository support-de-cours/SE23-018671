<?php 

// Definition de la table de routage

const ROUTES = [

    // Home page
    [
        'name'       => "homepage",
        'path'       => "/",
        'controller' => "App\Controller\HomepageController::index",
        'methods'    => ['HEAD', 'GET']
    ],

    // About Us
    [
        'name'       => "about",
        'path'       => "/qui-sommes-nous",
        'controller' => "App\Controller\AboutController::index",
        'methods'    => ['HEAD', 'GET']
    ],

    // Books
    [
        'name'       => "book:index",
        'path'       => "/books",
        'controller' => "App\Controller\BooksController::index",
        'methods'    => ['HEAD', 'GET']
    ],
    [
        'name'       => "book:read",
        'path'       => "/books/{id}",
        'controller' => "App\Controller\BooksController::read",
        'methods'    => ['HEAD', 'GET']
    ],

    // Contact
    [
        'name'       => "contact",
        'path'       => "/contact",
        'controller' => "App\Controller\ContactController",
        'methods'    => ['HEAD', 'GET', 'POST']
    ],

    // User
    [
        'name'       => "users",
        'path'       => "/users",
        'controller' => "App\Controller\UsersController::index",
        'methods'    => ['HEAD', 'GET']
    ],

    // 404
    [
        'name'       => "error:404",
        'path'       => null,
        'controller' => "App\Controller\ErrorController::err404",
        'methods'    => ['HEAD', 'GET']
    ],

];