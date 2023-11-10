<?php
namespace App\Controller;

use App\Abstract\AbstractController;

class AboutController extends AbstractController
{
    public function index()
    {
        return $this->render('about/index');
    }
}
