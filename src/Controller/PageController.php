<?php

namespace App\Controller;

use App\Controller\Controller;


class PageController extends Controller
{
    public function about()
    {
        return $this->twig->render('about.html.twig');
    }
}
?>