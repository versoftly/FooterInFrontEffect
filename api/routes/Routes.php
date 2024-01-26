<?php

    class Routes {

        public function success () {
            $routesArray = explode("/",$_SERVER['REQUEST_URI']);
            $routesArray = array_filter($routesArray);
            if (count($routesArray) == 0) {
                header("Location: template.php");
            }
            echo json_encode ([
                "status" => 200,
                "result" => "success",
                "uri" => $routesArray
            ]);
        }

    }

?>