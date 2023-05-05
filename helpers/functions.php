<?php
$password_length = $_GET['length'] ?? null;
var_dump($password_length);

$alphabet_up = range('A', 'Z');
$alphabet_lw = range('a', 'z');
$numbers = range('1', '9');
$charachter = array_merge($alphabet_up, $alphabet_lw, $numbers);
shuffle($charachter); //mischio l'array

//prendo casualmente degli indici dall'array

$password_for_user = '';
if ($password_length != null) {
    $random_index_charachter = array_rand($charachter, $password_length);

    foreach ($random_index_charachter as $key => $value) {
        $password_for_user .= $charachter[$value];
    }
}
//var_dump($password_for_user);