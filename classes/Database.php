<?php
    class Database{
        public $serverName     = "localhost" ;
        public $userName       = "root" ;
        public $password       = "" ;
        public $databaseName   = "php_quizz" ;
        public $connection     = null ;

        function connect(){

            try{
                $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->databaseName", $this->userName, $this->password) ;
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

                return $this->connection ;
            }

            catch (PDOException $e){
                echo $e ;
            }
        }
    }