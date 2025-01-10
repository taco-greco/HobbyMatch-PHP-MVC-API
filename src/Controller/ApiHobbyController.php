<?php

namespace src\Controller;

use src\Model\Hobby;

class ApiHobbyController
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function getAll (){
        if($_SERVER["REQUEST_METHOD"] != "GET"){
        header("HTTP/1.1 405 Method Not Allowed");
        return json_encode([
        "code" => 1,
        "Message" => "Get Attendu"
        ]);
        }
        $hobbies = Hobby::SqlGetAll();
        return json_encode($hobbies);
        }
}
