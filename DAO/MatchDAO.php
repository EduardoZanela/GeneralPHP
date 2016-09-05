<?php
include '../Persistence/ConnectionDB.php';
class ProductDAO{
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstance();
    }


    public function insertProduct($product){
        try{
            $status = $this->connection->prepare("Insert Into match(id,nome,descricao,codigo,grupo,subGrupo,marca"
                . " values(null,?,?,?,?,?,?)");

            $status->bindValue(1, $product->nome);
            $status->bindValue(2, $product->descricao);
            $status->bindValue(3, $product->codigo);
            $status->bindValue(4, $product->grupo);
            $status->bindValue(5, $product->subGrupo);
            $status->bindValue(6, $product->marca);

            $status->execute();

            $this->connection = null;


        } catch (PDOException $ex) {
            echo 'Erro ocorreu';
        }

    }
}


?>