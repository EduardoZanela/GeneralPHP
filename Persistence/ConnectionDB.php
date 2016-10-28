<?php
class ConnectionDB extends PDO{
    private static $instance = null;

    public function ConnectionDB($dsn, $user, $pwd){
        parent::__construct($dsn, $user, $pwd);
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new ConnectionDB("mysql:dbname=general;host=localhost", "root", "");                
            } catch (Exception $ex) {
                echo 'Ocorreram falhas ao conectar';
                echo "$ex";
                exit();
            }
        }
        return self::$instance;
    }

}
