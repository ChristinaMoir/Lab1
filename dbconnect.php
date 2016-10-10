<?php

$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "bae6f2bb6b3381",
    "17dce13b",
    "acsm_9175cbcd1f23574"
);


if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}



?>
