<?php

    class RoutesController {

        public function index () {
            require_once ("./api/routes/Routes.php");
            $routes = new Routes;
            $routes->success();
        }

    }

?>