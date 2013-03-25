<?php

setlocale(LC_ALL, 'en_US.UTF8');

$title = 'Sociedad científica de estudiantes de sistemas e informática - SCESI';
$title2 = 'scesi espresso';

$host = $_SERVER['HTTP_HOST'];

if ($host == '167.157.28.34') {
    $server = 'scesi.memi.umss.edu.bo';    
} else {
    $url_parts = explode('.', $host);
    array_shift($url_parts);
    $server = implode('.', $url_parts);
}

$items = array(
    array('label' => 'babel',
          'description' => 'Biblioteca babel (testing)'),
    array('label' => 'maelstrom',
          'description' => 'Biblioteca mælstrøm (testing)'),
    null,
    array('label' => 'open seasons',
          'url' => 'http://yachay.scesi.org/communities/open-seasons',
          'description' => 'Sitio de recursos, disponibles para las open seasons (testing)'),
    array('label' => 'fosobi',
          'url' => 'http://yachay.scesi.org/communities/fosobi',
          'description' => 'Proyecto FOSOBI, orientado a la creación de OBI GNU/Linux, y FOS GNU/Linux.'),
    null,
    array('label' => 'jornadas',
          'description' => 'Sitio de la jornadas de seguridad informática 2012 (producción)'),
    array('label' => 'hackmeeting',
          'description' => 'Sitio del hackmeeting 2012 (producción)'),
    null,
    array('label' => 'wiki',
          'description' => 'Wiki utilizado por la sociedad científica para fines documentales (producción)'),
    array('label' => 'blog',
          'description' => 'Blog oficial de la sociedad cientifica (producción)'),
    array('label' => 'galeria'),
    array('label' => 'ibox',
          'url' => 'http://ibox.scesi.memi.umss.edu.bo'),
    null,
    array('label' => 'yachay memi',
          'url' => 'http://yachay.memi.umss.edu.bo',
          'description' => 'Red social, parte del proyecto MEMI (testing)'),
    array('label' => 'yachay scesi',
          'url' => 'http://yachay.scesi.org',
          'description' => 'Instancia local del proyecto yachay (testing)'),
    null,
    array('label' => 'federica',
          'description' => 'Administrador digital del mARTadero (desarrollo)'),
    array('label' => 'lemniscata',
          'description' => 'Generador automatico de documentos (desarrollo)'),
    array('label' => 'nonchalant',
          'description' => 'Emulador de terminal (desarrollo)'),
    null,
    array('label' => 'oops',
          'description' => 'BTS usado en los proyectos de desarrollo de la sociedad científica (producción)'),
    array('label' => 'repoman',
          'description' => 'Alojamiento de las imágenes de instalación de sistemas linux y bsd (producción)'),
    array('label' => 'cacti',
          'description' => 'Monitor de vigilancia de los servidores administrados por la sociedad científica (producción)'),
    array('label' => 'serendipia',
          'description' => 'Servidor de versiones en Git (testing)'),
    array('label' => 'biologia',
          'description' => 'Sitio oficial de la carrera de biología (producción)'),
    null,
    array('label' => 'espresso',
          'description' => 'Portada principal de los servicios disponibles (producción)'),
    array('label' => 'latte',
          'description' => 'Lector RSS (desarrollo)'),
    array('label' => 'macchiato',
          'description' => 'Musica en linea (desarrollo)'),
    array('label' => 'cappuchino',
          'description' => 'Planificador de horarios en la FCyT (desarrollo)'),
    array('label' => 'mochaccino'),
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