<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <p>
        <?php
            $myAge = 19;
            print "You are allowed to buy: ";
            if($myAge>21){
                print "</br> Sausage Rolls </br> Mugs </br> Specs";
            }else if($myAge>18){
                print "</br> Sausage Rolls </br> Mugs";
            }else if($myAge>16){
                print "</br> Sausage Rolls";
            }else{
                print"</br> Nothing";
            }
        ?>
    </p>
</body>
</html>