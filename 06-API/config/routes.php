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
    // --
    // site.com/books
    // site.com/book
    // site.com/book/42
    // site.com/book/42/edit
    // site.com/book/42/delete
    // --
    // site.com/books
    // site.com/books/create
    // site.com/books/42
    // site.com/books/42/edit
    // site.com/books/42/delete

    // -- (API)
    // site.com/books (GET)
    // site.com/book (GET, POST)
    // site.com/book/42 (GET)
    // site.com/book/42 (PUT, PATCH)
    // site.com/book/42 (DELETE)

    [ // Liste des livres
        'name'       => "book:index",
        'path'       => "/books",
        'controller' => "App\Controller\BooksController::index",
        'methods'    => ['HEAD', 'GET']
    ],
    [ // Ajouter un livre
        'name'       => "book:create",
        'path'       => "/book",
        'controller' => "App\Controller\BooksController::create",
        'methods'    => ['HEAD', 'GET', 'POST']
    ],
    [ // Lire le detail d'un livre
        'name'       => "book:read",
        'path'       => "/book/{id}",
        'controller' => "App\Controller\BooksController::read",
        'methods'    => ['HEAD', 'GET']
    ],
    [ // Modifier les données d'un livre
        'name'       => "book:update",
        'path'       => "/book/{id}/edit",
        'controller' => "App\Controller\BooksController::update",
        'methods'    => ['HEAD', 'GET', 'POST']
    ],
    [ // Supprimer un livre
        'name'       => "book:delete",
        'path'       => "/book/{id}/delete",
        'controller' => "App\Controller\BooksController::delete",
        'methods'    => ['HEAD', 'GET', 'POST']
    ],

    // Contact
    [
        'name'       => "contact",
        'path'       => "/contact",
        'controller' => "App\Controller\ContactController",
        'methods'    => ['HEAD', 'GET', 'POST']
    ],

    // 404
    [
        'name'       => "error:404",
        'path'       => null,
        'controller' => "App\Controller\ErrorController::err404",
        'methods'    => ['HEAD', 'GET']
    ],

];