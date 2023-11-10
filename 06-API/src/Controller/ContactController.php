<?php 
namespace App\Controller;

use App\Abstract\AbstractController;

class ContactController extends AbstractController
{
    public function index()
    {
        $name = "John";
        $fruits = ["Pommes", "Poires"];

        sleep(2);
        return $this->render("contact/index", [
            'name'   => $name,
            'fruits' => $fruits,
        ]);
    }
}