<?php

namespace src\Service;

use Firebase\JWT\JWT;

class JwtService
{
    public static string $secretKey = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';

    public static function createToken(array $datas): String
    {
        //$datas = données personnelles qu'on souhaite mettre dans le jeton (le mail, les roles etc.)
        $issuedAt = new \DateTimeImmutable();
        // date + heure.IDentique DateTime sauf que c'est fluent (modify retourne l'objet)
        $expire = $issuedAt->modify('+6 minutes')->getTimestamp();
        $serverName = "cesi.local";
        $data = [
            'iat' => $issuedAt->getTimestamp(),
            // Issued at: : heure à laquelle le jetona été généré
            'iss' => $serverName, // Émetteur
            'nbf' => $issuedAt->getTimestamp(), // Utilisable Pas avant..
            'exp' => $expire, // Expiration
            'datas' => $datas
        ];
        //Fabrication du JWT (met tout en json, signe et encode en base 64)
        $jwt = JWT::encode(
            $data,
            self::$secretKey,
            'HS512'
        );
        return $jwt;
    }
}
