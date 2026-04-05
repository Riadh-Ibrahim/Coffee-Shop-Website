<?php

class Dbh {


    protected function connect(){
        try{
            $username = getenv('DB_USER') ?: 'root';
            $password = getenv('DB_PASS') ?: '';
            $host = getenv('DB_HOST') ?: '127.0.0.1';
            $dbname = getenv('DB_NAME') ?: 'ooplogin';
            $socket = getenv('DB_SOCKET') ?: null;
            if ($socket) {
                $dsn = "mysql:unix_socket={$socket};dbname={$dbname}";
            } else {
                $dsn = "mysql:host={$host};dbname={$dbname}";
            }
            $dbh = new PDO($dsn, $username, $password);
            return $dbh;
        }
catch(PDOException $e){
    print "Error! ". $e->getMessage() . "<br/ >";
    die();
    }
}
}