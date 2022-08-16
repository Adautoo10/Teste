<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



include 'Controller/PokedexController.php';


switch($uri_parse)
{
    case '/Pokemon':
        PokedexController::index();
    break;

    case '/Pokemon/form':
        PokedexController::form();
    break;

    case '/Pokemon/save':
        PokedexController::save();
    break;

    case '/Pokemon/delete':
        PokedexController::delete();
    break;
    
    
    default:
        echo "erro 404";
    break;
}