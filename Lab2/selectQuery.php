<h1>Hello!!!</h1>
<?php
    include "../dbconnect.php";
    if($db->connect_errno){
        die('Connect failed['.$db->connect_error.']');
    }
    $sql_query = "SELECT * FROM marvelmovies WHERE superpower LIKE '%laser%'";

    $results = $db->query($sql_query);

    while($row=$results->fetch_array()){
    echo "<p>".$row['title']."</p>";
    }

    $results->close();
    $db->close();
?>