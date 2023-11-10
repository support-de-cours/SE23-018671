<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class ErrorController extends AbstractController
{
    public function err404()
    {
        return $this->render('error/404');
    }
}

