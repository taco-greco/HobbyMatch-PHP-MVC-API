<?php

namespace src\Controller;

use src\Model\Hobby;
use src\Model\BDD;


class HobbyController
{
    public function index()
    {
        $html = '<h1>bonjour voici la liste des 20 derniers articles</h1>';
        $hobbies = Hobby::SqlGetLast(20);
        foreach ($hobbies as $hobby) {
            $html .= "<p>{$hobby->getTitre()}</p>";
        }
        return $html;
    }

    public function fixtures()
    {
        $requette = BDD::getInstance()->prepare("TRUNCATE TABLE hobby")->execute();
    }
}
