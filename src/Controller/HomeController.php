<?php

namespace App\Controller;

use Metroid\View\ViewRenderer;
use Metroid\Http\Request;
use Metroid\Http\Response;
use Metroid\FlashMessage\FlashMessage;
use Metroid\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function __construct(ViewRenderer $viewRenderer, FlashMessage $flashMessage)
    {
        parent::__construct($viewRenderer, $flashMessage);
    }

    public function index(Request $request): Response
    {
        return $this->viewRenderer->render('home.phtml', [
            'title' => 'Bienvenue sur votre nouveau projet Metroid'
        ], 200);
    }
}
