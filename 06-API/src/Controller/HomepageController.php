<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class HomepageController extends AbstractController
{
    public function index()
    {
        return $this->render('homepage/index');
    }
}

