<?php
    $db = new mysqli(
        'eu-cdbr-azure-north-e.cloudapp.net',
        'bae6f2bb6b3381',
        '17dce13b',
        'mydb'
    );

    if($db->connect_errno){
        die('Connect failed['.$db->connect_error.']');
    }



?>