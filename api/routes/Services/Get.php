<?php

    require_once "./api/controllers/GetController.php";

    $response = GetController::getDataFrom($routesArray[1]);

    if (!empty($response)) {
        echo json_encode ([
            "status" => 200,
            "petition_type" => "GET",
            "total_rows" => count($response),
            "result" => $response
        ]);
    } else {
        echo json_encode ([
            "status" => 404,
            "petition_type" => "GET",
            "result" => "Not Found."
        ]);
    }

    

?>