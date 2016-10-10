
<?php
    include "../dbconnect.php";

    $sql_query = "SELECT * FROM marvelmovies";

    $results = $db->query($sql_query);

    while($row=$results->fetch_array()){
    echo "<p>".$row['title']."</p>";
    }

    $results->close();
    $db->close();
?>