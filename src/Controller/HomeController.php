<?php

namespace App\Controller;

use Mini\View\ViewRenderer;
use Mini\FlashMessage\FlashMessage;
use Mini\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $name;
    public function __construct(ViewRenderer $viewRenderer, FlashMessage $flashMessage)
    {
        parent::__construct($viewRenderer, $flashMessage);

        $this->name = 'Home';
    }


    public function index()
    {
        return $this->viewRenderer->render('home.phtml', [
            'title' => 'Bienvenue sur votre nouveau projet MVC-Starter'
        ]);
    }
}
