<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class BooksController extends AbstractController
{
    public function index()
    {
        return $this->render('books/index');
    }
}

