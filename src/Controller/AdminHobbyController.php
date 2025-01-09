<?php

namespace src\Controller;

use src\Model\Hobby;

class AdminHobbyController extends AbstractController
{
    public function list()
    {
        $hobbies = Hobby::SqlGetAll();
        return $this->twig->render('Admin/Hobby/list.html.twig', [
            'hobbies' => $hobbies
        ]);
    }
}
