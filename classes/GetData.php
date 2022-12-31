<?php
    include_once 'Database.php' ;

    class GetData{
        public static function getQuestions(){
            $connection = new Database ;
            $connection = $connection->connect() ;
            $query      = " SELECT * FROM questions " ;
            $stmt       = $connection->query($query) ;
            $data       = $stmt->fetchAll() ;

            $quizzQuestions = "quizzQuestions = ".json_encode($data) ;

            file_put_contents('../../starter/assets/script/data.js', $quizzQuestions);

            // return $data ;


        }
    }


    