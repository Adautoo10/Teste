<?php


class PokedexDAO
{
    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=pokedex";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(PokedexModel $model) 
    { 
        $sql = "INSERT INTO pokemon
                (nome, altura, peso, habilidades) 
                VALUES (?, ?, ?, ?)";
        

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->altura);
        $stmt->bindValue(3, $model->peso);
        $stmt->bindValue(4, $model->habilidades);
        
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemon ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(PokedexModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, altura=?, peso=?, habilidades=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->altura);
        $stmt->bindValue(3, $model->peso);
        $stmt->bindValue(4, $model->habilidades);
        $stmt->bindValue(5, $model->id);


        $stmt->execute();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PokedexModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemon WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }
}