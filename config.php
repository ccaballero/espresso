<?php
setlocale(LC_ALL, 'en_US.UTF8');

$title = 'scesi espresso';

$host = $_SERVER['HTTP_HOST'];
$domains = explode('.', $host);

array_shift($domains);
$server = implode('.', $domains);

$domains = array(
    'babel',
    'maelstrom',
    
    'espresso',
//    'macchiato',
//    'cappuchino',
    'latte',
//    'mochaccino',

    'federica',
//    'lebenslangerschicksalsschatz',
    'lemniscata',
    'nonchalant',
    'serendipia',
    'jornadas',
    'hackmeeting',

    'www',
    'yachay',

    'oops',
    'repoman',
    'cacti',

    'biologia',
    'wiki',
    'galeria',
    'ibox',
);
