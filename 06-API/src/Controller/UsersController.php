<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class UserController extends AbstractController
{
    public function index()
    {
        return $this->render('user/index');
    }
}

