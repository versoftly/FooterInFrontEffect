<?php

    class Connection {

        public static function info () {
            return [
                "database" => "database-1",
                "user" => "adaptowebs",
                "pass" => "adaptowebs.Rg2"
            ];
        }

        public static function connect () {
            try {
                $conn = new PDO("mysql:host=localhost;dbname=".Connection::info()['database'], 
                Connection::info()['user'], Connection::info()['pass']);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec("set names utf8");
                return $conn;
            } catch (PDOException $e) {
                die("Error ".$e->getMessage());
            }
        }

    }

?>