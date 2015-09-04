<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                // Create the multiplication table for integers 1 thru 12
                // i.e.
                // 1 x 1 = 1
                // 1 x 2 = 2
                // etc
                for ($integer=1; $integer<=12; $integer++)
                {
                    for ($i=1; $i<=12;$i++)
                    {
                        $value =$integer*$i;
                        echo "$integer x $i =$value";
                        echo "<br/>";
                    }
                    
                }
        
            ?>

        </p>
	</body>
</html>