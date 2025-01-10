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
    public function delete(int $id){
        Hobby::SqlDelete($id);
        header("Location:/?controller=AdminHobby&action=list");
    }
}
