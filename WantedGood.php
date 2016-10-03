<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
        $wantedGood = "mugs";

        switch($wantedGood){
            case "mugs":
                echo "You have to be 18 to buy mugs";
                break;
            case "specs":
                echo "You have to be 16 to buy specs";
                break;
            case "sausage rolls":
                echo "You have to be 21 to buy sausage rolls";
                break;
        }
    ?>
</p>
</body>
</html>