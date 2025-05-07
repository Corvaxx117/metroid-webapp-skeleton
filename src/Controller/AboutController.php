<?php

namespace App\Controller;

use Metroid\Controller\AbstractController;
use Metroid\Http\Request;
use Metroid\Http\Response;
use Metroid\View\ViewRenderer;
use Metroid\FlashMessage\FlashMessage;

class AboutController extends AbstractController
{
    public function __construct(ViewRenderer $viewRenderer, FlashMessage $flashMessage)
    {
        parent::__construct($viewRenderer, $flashMessage);
    }

    public function index(Request $request): Response
    {
        $html = $this->viewRenderer->render('about.phtml', [
            'title' => 'À propos de ce projet',
        ], 200, true);

        return (new Response())
            ->setContent($html ?? 'Erreur de rendu du template')
            ->setStatusCode(200);
    }
}
