<?php

setlocale(LC_ALL, 'en_US.UTF8');

$title = 'scesi espresso';

$host = $_SERVER['HTTP_HOST'];

if ($host == '167.157.28.34') {
    $server = 'scesi.memi.umss.edu.bo';    
} else {
    $domains = explode('.', $host);
    array_shift($domains);
    $server = implode('.', $domains);
}

$domains = array(
    'babel',
    'maelstrom',
    
    'espresso',
//    'macchiato',
//    'cappuchino',
    'latte',
    'mochaccino',

    'federica',
    'lemniscata',
    'nonchalant',
    'serendipia',
    'jornadas',
    'hackmeeting',

    array('memi', 'http://yachay.memi.umss.edu.bo'),
    array('yachay', 'http://yachay.scesi.org'),

    'oops',
    'repoman',
    'cacti',

    'biologia',

    'wiki',
    'blog',

    array('galeria', 'http://galeria.scesi.memi.umss.edu.bo'),
    array('ibox', 'http://ibox.scesi.memi.umss.edu.bo'),

    array('open seasons', 'http://yachay.scesi.org/communities/open-seasons'),
);

