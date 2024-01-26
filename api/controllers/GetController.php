<?php

    require_once "./api/models/GetModel.php";

    class GetController {

        public static function getDataFrom ($table) {
            $response = GetModel::getDataFrom ($table);
            return $response;
        }

    }

?>