<?php

    require_once "./api/models/Connection.php";

    class GetModel {

        public static function getDataFrom ($table) {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

    }

?>