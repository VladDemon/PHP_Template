<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    protected $twig;
    private $db;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../View/');
        $this->twig = new Environment($loader);
    }
}
