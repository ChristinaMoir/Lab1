<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h2>All Movies</h2>
    <?php
    include "../dbconnect.php";

    $sql_query = "SELECT * FROM marvelmovies";

    $results = $db->query($sql_query);

    while($row=$results->fetch_array()){
        echo "<p> Title:".$row['title']." Year released: ".$row['yearReleased'].
            " Production Studio: ".$row['productionStudio']." Notes: ".$row['notes']."</p>";
    }

    $results->close();
    $db->close();

    ?>
</body>
</html>
