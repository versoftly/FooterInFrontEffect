<?php

    require_once "./api/controllers/VersoftlyController.php";

    $versoftly = new VersoftlyController;

    $versoftly->get_versoftly();

?>