<?php
    header('Content-Type: application/json');
    require_once "core.php";

    if(!update_injuries_db()) {
        json_print_error();
        exit;
    }
    
    json_print_success();
    exit;

