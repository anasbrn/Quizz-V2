<?php
    include "./classes/Database.php" ;

    function getData(){
        $connection = new Database;
        $connection = $connection->connect() ;
        $query = "SELECT * FROM admin" ;
        $stmt = $connection->query($query) ;

        $data = $stmt->fetch() ;

        echo '<pre>' ;
        var_dump($data) ;
        echo '</pre>' ;
    }

    getData() ;

