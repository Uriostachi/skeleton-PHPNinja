<?php
 
namespace App\Controller;

use PHPNinja\AbstractController;

class HomeController extends AbstractController
{
    public function print() 
    {
        return $this->render('web/home');
    }
}