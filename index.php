<?php
/**
 * Created by PhpStorm.
 * User: OloloshOloloevich
 * Date: 09.02.2019
 * Time: 19:22
 */

require_once 'vendor/autoload.php'; //автозагрузка композера


$loader = new Twig_Loader_Filesystem('templates'); // где хранятся шаблоны

$twig = new Twig_Environment($loader); // передаем объект с шаблонами
$template = $twig->loadTemplate('index.html');
$title = "Название страницы";

echo $template->render(array(
    'title' => $title
)); // вывод шаблонизатора

