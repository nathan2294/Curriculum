<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                 // Display the first 6 even numbers greater than 12 using a while loop
                $evencount=1;
                $integer = 13;
                while ($evencount<=6){
                    if($integer % 2==0 && $integer>12){
                        
                        echo $integer;
                        echo"<br/>";
                        $evencount++;
                      
                    }
                    $integer++;
                    
                }
        
            ?>

        </p>
	</body>
</html>