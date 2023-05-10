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

$password = make_password($password_length, $charachters, $_GET['repeat']);

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

/**
 * @param (number) $length
 * @param (Array) $array
 * @param (string) $repeat
 * return a string with the password
 */
function make_password($length, $array, $repeat)
{
    $password = '';
    if ($length != null && $repeat == 'yes') {

        while (strlen($password) < $length) {
            //prendo un carattere casuale dalla stringa charachters.
            $char = $array[rand(0, strlen($array) - 1)];
            $password .= $char;
        }
    } elseif ($length != null && $repeat == 'no') {

        while (strlen($password) < $length) {
            //prendo un carattere casuale dalla stringa charachters e la inserisco in password solo se diversa dalla precedente inserita.
            $char = $array[rand(0, strlen($array) - 1)];
            if ($char != substr($password, -1)) {
                $password .= $char;
            }
        }
    }
    return $password;
}
