<?php

    class Routes {

        public function success () {
            echo json_encode ([
                "status" => 200,
                "result" => "success"
            ]);
        }

    }

?>