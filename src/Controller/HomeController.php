<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }
    public function show()
    {
        if ($_GET['search'] === "Je ne regrette rien") {
            return $this->twig->render('Show1/show.html.twig');
        } else if ($_GET['search'] === "Boum Boum") {
            return $this->twig->render('Show2/index.html.twig');
        }
    }
}
