<?php 
    include_once 'Database.php' ;
    class Admin{
        public static function getAllContestants(){
            $connection = new Database ;
            $connection = $connection->connect() ;
            $query      = "SELECT firstName, lastName, email, score, ipAddress, os, browser, quizz.quizzName FROM `user`, quizz WHERE quizz.quizzId = `user`.`quizzId`" ;
            $stmt       = $connection->query($query) ;
            $data       = $stmt->fetchAll() ;

            // var_dump($data) ;
            return $data ;
        }

    }
    