<?php

function firstWords(int $count, string $sentence): string
{
preg_match('/^(\S+\s+){0,' . ($count - 1) . '}\S+/', $sentence, $matches);
$resultat = $matches[0];
return $resultat;
}