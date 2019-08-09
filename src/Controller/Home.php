<?php
namespace App\Controller;

use \Scoop\Controller;
use \Scoop\View;
use \App\Repository\Quote;

class Home extends Controller
{
    public function get()
    {
        return new View('home');
    }
}
