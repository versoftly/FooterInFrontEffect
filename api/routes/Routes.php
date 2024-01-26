<?php

    class Routes {

        public function success () {
            $routesArray = explode("/",$_SERVER['REQUEST_URI']);
            $routesArray = array_filter($routesArray);
            if (count($routesArray) == 0) {
                header("Location: template.php");
            }
            else if (count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])) {
                if ($_SERVER['REQUEST_METHOD'] == "GET") {
                    echo json_encode ([
                        "status" => 200,
                        "result" => "GET",
                        "uri" => $routesArray
                    ]);
                } else if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo json_encode ([
                        "status" => 200,
                        "result" => "POST",
                        "uri" => $routesArray
                    ]);
                } else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
                    echo json_encode ([
                        "status" => 200,
                        "result" => "PUT",
                        "uri" => $routesArray
                    ]);
                } else if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
                    echo json_encode ([
                        "status" => 200,
                        "result" => "DELETE",
                        "uri" => $routesArray
                    ]);
                } else {
                    header("Location: template.php");
                }
            }
            else {
                echo json_encode ([
                    "status" => 200,
                    "result" => "success",
                    "uri" => $routesArray
                ]);
            }
        }

    }

?>