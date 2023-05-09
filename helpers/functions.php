<?php
session_start();

$password_length = $_GET['length'] ?? null;

if ($password_length == 0) {
    $password_length = null;
}
//var_dump($password_length);

$alphabet_up = range('A', 'Z');
$alphabet_lw = range('a', 'z');
$numbers = range('1', '9');
$symbols = ["!", "?", "$", "%", "&", "+", "=", "[", "]", '~', '@', ':', '#', '{', '}', '(', ')'];

$charachter = [];
if ($_GET['letters'] && $_GET['numbers'] && $_GET['symbols']) {
    $charachter = array_merge($alphabet_up, $alphabet_lw, $numbers, $symbols);
} elseif ($_GET['letters'] && $_GET['numbers']) {
    $charachter = array_merge($alphabet_up, $alphabet_lw, $numbers);
} elseif ($_GET['letters'] && $_GET['symbols']) {
    $charachter = array_merge($alphabet_up, $alphabet_lw, $symbols);
} elseif ($_GET['numbers'] && $_GET['symbols']) {
    $charachter = array_merge($numbers, $symbols);
} elseif ($_GET['letters']) {
    $charachter = array_merge($alphabet_up, $alphabet_lw);
} elseif ($_GET['numbers']) {
    $charachter = array_merge($numbers);
} elseif ($_GET['symbols']) {
    $charachter = array_merge($symbols);
}

shuffle($charachter); //mischio l'array

$password_for_user = '';
if ($password_length != null) {
    //prendo casualmente degli indici dall'array
    $random_index_charachter = array_rand($charachter, $password_length);

    foreach ($random_index_charachter as $key => $value) {
        $password_for_user .= $charachter[$value];
    }
}
$_SESSION['password'] = $password_for_user;
