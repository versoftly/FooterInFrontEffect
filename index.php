<?php 

    require_once ("./api/controllers/RoutesController.php");

    $index = new RoutesController;

    $index -> index ();

?>