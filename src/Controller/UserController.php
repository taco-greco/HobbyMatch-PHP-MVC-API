<?php

namespace src\Controller;

class UserController extends AbstractController
{
    public function create()
    {
        return $this->twig->render("User/create.html.twig");
    }
}
