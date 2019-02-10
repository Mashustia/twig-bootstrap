<?php

require_once 'vendor/autoload.php'; //автозагрузка композера


$loader = new Twig_Loader_Filesystem('templates'); // где хранятся шаблоны

$twig = new Twig_Environment($loader); // передаем объект с шаблонами
$template = $twig->loadTemplate('index.html');

$title = "Giant";

echo $template->render(array(
    'title' => $title
)); // вывод шаблонизатора
