<?php

require __DIR__ . '/vendor/autoload.php';
use Ktest\Stylo;

$stylo = new Stylo(10, "red");
///var_dump($stylo);
echo $stylo->ecrire("Bonjour");