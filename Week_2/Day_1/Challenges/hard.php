<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php
                function divisible($integer){
                    //$counter=0;
                    for ($number=1; $number<=100; $number ++)
                    {
                    
                        if ($number % $integer==0)
                        {
                            $counter ++;
                            echo $number;
                            echo "<br/>";
                            
                        }
                        
                    }
                    return $counter;
                }
            
                echo "This list of numbers is divisible by 3: ";
                echo "<br/>";
                divisible(3);

                
                echo "This list of numbers is divisible by 6: ";
                echo "<br/>";
                divisible(6);
                echo "Total numbers: $counter";

                // code goes here ...

            ?>
        </p>
	</body>
</html>