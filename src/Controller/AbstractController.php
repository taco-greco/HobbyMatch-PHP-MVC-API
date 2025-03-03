<?php

namespace src\Controller;

abstract class AbstractController
{
    protected $twig;

    public function __construct()
    {

        $loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/../src/View');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => $_SERVER['DOCUMENT_ROOT'].'/../var/cache',
            'debug' => true,
        ]);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        //file exist
        $fileExist = new \Twig\TwigFunction('file_exist', function($fullfilename){
            return file_exists($fullfilename);
        });
        $this->twig->addFunction($fileExist);
        $this->twig->addGlobal('session', $_SESSION);
        $this->twig->addGlobal('current_uri', $_SERVER['REQUEST_URI']);
    }

    protected function generateCsrfToken()
    {
        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $token;
    }
}
