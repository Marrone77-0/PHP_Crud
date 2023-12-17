<?php

define('HOST','localhost:3306');
define('DATABASE','vuln');
define('USERDB','shadow');
define('PASSDB','m123');






class connectionDb{
    protected $connection;
    

    function  __construct() {
        $this->connectionDatabase();
        
    }

    function connectionDatabase(){
        try {
            $this->connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE,USERDB,PASSDB);

        } catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
            die();

        }

    }

} 





