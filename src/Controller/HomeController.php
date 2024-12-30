<?php

namespace App\Controller;

use App\Controller\Controller;
use OpenApi\Attributes as OA;

#[OA\Info(title: "My First API", version: "0.1")]
#[OA\PathItem(path: "/home")]
class HomeController extends Controller
{
    #[OA\Get(
        path: "/home",
        summary: "Get home page",
        description: "Returns the home page content",
        responses: [
            new OA\Response(response: 200, description: "Successful response")
        ]
    )]
    public function index() {
        return $this->twig->render('index.html.twig', [
            'title' => "HOME PAGE",
        ]);
    }
}
?>
