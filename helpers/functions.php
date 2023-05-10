<?php
session_start();

$password_length = $_GET['length'] ?? null;

if ($password_length == 0) {
    $password_length = null;
}
//var_dump($password_length);

$alphabet_up = range('A', 'Z');
$alphabet_lw = range('a', 'z');
$all_letters = array_merge($alphabet_up, $alphabet_lw);
$numbers = range('1', '9');
$symbols = ["!", "?", "$", "%", "&", "+", "=", "[", "]", '~', '@', ':', '#', '{', '}', '(', ')'];

$charachters = '';

if ($_GET['letters']) {
    $charachters .= make_string_charachters($all_letters);
}

if ($_GET['numbers']) {
    $charachters .= make_string_charachters($numbers);
}

if ($_GET['symbols']) {
    $charachters .= make_string_charachters($symbols);
}

$charachters = str_shuffle($charachters); //mischio la stringa

$password = '';
if ($password_length != null && $_GET['repeat'] == 'yes') {

    while (strlen($password) < $password_length) {
        //prendo un carattere casuale dalla stringa charachters.
        $char = $charachters[rand(0, strlen($charachters) - 1)];
        $password .= $char;
    }
} elseif ($password_length != null && $_GET['repeat'] == 'no') {

    while (strlen($password) < $password_length) {
        //prendo un carattere casuale dalla stringa charachters e la inserisco in password solo se diversa dalla precedente inserita.
        $char = $charachters[rand(0, strlen($charachters) - 1)];
        if ($char != substr($password, -1)) {
            $password .= $char;
        }
    }
}
$_SESSION['password'] = $password;



/* FUNCTIONS */

/**
 * @param (Array) $array
 * return a string with the charachter of the array 
 */
function make_string_charachters($array)
{
    $string = '';
    foreach ($array as $key => $value) {
        $string .= $value;
    }
    return $string;
};
