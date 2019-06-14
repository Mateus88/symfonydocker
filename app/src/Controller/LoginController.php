<?php
// src/Controller/LoginController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Illuminate\Http\JsonResponse;

class LoginController extends AbstractController
{
    /**
      * @Route("/")
     */
    public function index()
    {
        return $this->render('home/login.html.twig');
    }

    /**
     * @Route("login/faceLogin")
     */
    public function facelogin(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            // Save the user information in session PHP
            return new JsonResponse(array('data' => 'Login successfully'));
        }
    }

}