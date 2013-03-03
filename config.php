<?php

setlocale(LC_ALL, 'en_US.UTF8');

$title = 'scesi espresso';
$host = $_SERVER['HTTP_HOST'];

if ($host == '167.157.28.34') {
    $server = 'scesi.memi.umss.edu.bo';    
} else {
    $url_parts = explode('.', $host);
    array_shift($url_parts);
    $server = implode('.', $url_parts);
}

$items = array(
    array('label' => 'babel', 'description' => 'Biblioteca babel (testing)'),
    array('label' => 'maelstrom', 'description' => 'Biblioteca mælstrøm (testing)'),
    array('label' => 'espresso', 'description' => 'Portada principal de los servicios disponibles (producción)'),
    array('label' => 'latte', 'description' => 'Lector RSS (desarrollo)'),
    array('label' => 'mochaccino'),
    array('label' => 'federica', 'description' => 'Administrador digital del mARTadero (desarrollo)'),
    array('label' => 'lemniscata', 'description' => 'Generador automatico de documentos (desarrollo)'),
    array('label' => 'nonchalant', 'description' => 'Emulador de terminal (desarrollo)'),
    array('label' => 'serendipia', 'description' => 'Servidor de versiones en Git (testing)'),
    array('label' => 'jornadas', 'description' => 'Sitio de la jornadas de seguridad informatica 2012 (producción)'),
    array('label' => 'hackmeeting', 'description' => 'Sitio del hackmeeting 2012 (producción)'),
    array('label' => 'memi', 'url' => 'http://yachay.memi.umss.edu.bo', 'description' => 'Red social, parte del proyecto MEMI (testing)'),
    array('label' => 'yachay', 'url' => 'http://yachay.scesi.org', 'description' => 'Instancia local del proyecto yachay (testing)'),
    array('label' => 'oops', 'description' => 'BTS usado en los proyectos de desarrollo de la sociedad cientifica (producción)'),
    array('label' => 'repoman', 'description' => 'Alojamiento de las imagenes de instalación de sistemas linux (producción)'),
    array('label' => 'cacti', 'description' => 'Monitor de vigilancia de los servidores administrados por la sociedad cientifica (producción)'),
    array('label' => 'biologia', 'description' => 'Sitio oficial de la carrera de biologia (producción)'),
    array('label' => 'wiki', 'description' => 'Wiki utilizado por la sociedad cientifica para fines documentales (producción)'),
    array('label' => 'blog', 'description' => 'Blog oficial de la sociedad cientifica (producción)'),
    array('label' => 'galeria', 'url' => 'http://galeria.scesi.memi.umss.edu.bo'),
    array('label' => 'ibox', 'url' => 'http://ibox.scesi.memi.umss.edu.bo'),
    array('label' => 'open seasons', 'url' => 'http://yachay.scesi.org/communities/open-seasons', 'description' => 'Sitio de recursos, disponibles para las open seasons (testing)'),
);

function get_url($item, $server) {
    if (isset($item['url'])) {
        return $item['url'];
    } else {
        return 'http://' . $item['label'] . '.' . $server;
    }
}

function get_description($item) {
    if (isset($item['description'])) {
        return $item['description'];
    } else {
        return '';
    }
}