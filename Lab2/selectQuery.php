<?php
    include "../dbconnect.php";

    $sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";

    $results = $db->query($sql_query);

    while($row=$results->fetch_array()){
    echo "<p>".$row['superherName']."</p>";
    }

    $results->close();
    $db->close();

?>