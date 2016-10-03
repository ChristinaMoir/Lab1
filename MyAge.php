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
                print "\n Sausage Rolls \n Mugs \n Specs";
            }else if($myAge>18){
                print "\n Sausage Rolls \n Mugs";
            }else if($myAge>16){
                print "\n Sausage Rolls";
            }else{
                print"\n Nothing";
            }
        ?>
    </p>
</body>
</html>