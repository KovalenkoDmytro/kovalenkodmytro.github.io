<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');


if(!empty($_POST['visitor'])){
    echo json_encode($_POST['visitor']);
}else
    echo json_encode("no visitor");