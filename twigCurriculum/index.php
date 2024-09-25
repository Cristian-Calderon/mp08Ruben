<?php
// Cargar el autoloader de Composer

use function PHPSTORM_META\map;

require_once __DIR__ . '/vendor/autoload.php';

// Inicializar Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

// Objeto
$cristian = [
    'nombre' => 'Cristian',
    'apellido' => 'Calderon',
    'nick-game'=> 'gardel',
    'Skills'=>[
        "JavaScript",
        "PHP",
        "Java",
        "Cobol",
        "C++"
    ],
    'mail'=> 'cdcalderonrojas@gmail.com',
    'movil' => '662584188',

];

// // Renderiza la plantilla
// echo $twig->render('ejemplo.twig', $data);

// Renderizar una plantilla
echo $twig->render('index.twig', ['cristian' => $cristian]);
