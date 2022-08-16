<?php

class PokedexController
{
    public static function index() 
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel;
        $model->getAllRows();

        
        include 'View/modules/Pokedex/ListarPokedex.php';
    }

    public static function form()
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        include 'View/modules/Pokedex/FormPokedex.php';
    }

    public static function save() 
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->altura = $_POST['altura'];
        $model->peso = $_POST['peso'];
        $model->habilidades = $_POST['habilidades'];
       
        
        
        $model->save(); 

        header("Location: /Pokemon"); 
    }

    public static function delete()
    {
        include 'Model/PokedexModel.php';

        $model = new PokedexModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /Pokemon");
    }
}