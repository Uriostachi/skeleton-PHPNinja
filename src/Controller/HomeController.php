<?php
 
namespace App\Controller;

use Yoop\AbstractController;

class HomeController extends AbstractController
{
    public function print() 
    {
        return $this->render('web/home');
    }
}