<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array(
               array('numbers' => range(0, 100))
             );
            /*
            for($i=0;$i<=100;$i++){
                $int=$inputs[0]['numbers'][$i];
                if ($int % 3 == 0 && $int % 5== 0){
                    echo "$int = FizzBuzz";
                    echo "<br/>";
                }else if ($int % 3 == 0){
                    echo "$int = Fizz";
                    echo "<br/>";
                }else if ($int % 5 == 0){
                    echo "$int = Buzz";
                    echo "<br/>";
                }
                
                
                
            }
             */
            foreach ($inputs as  $ArrayNum){
                foreach($ArrayNum as $numbersArray){
                    foreach($numbersArray as $num){
                        if ($num % 3 == 0 && $num % 5== 0){
                            echo "$num = FizzBuzz";
                            echo "<br/>";
                        }else if ($num % 3 == 0){
                            echo "$num = Fizz";
                            echo "<br/>";
                        }else if ($num % 5 == 0){
                            echo "$num = Buzz";
                            echo "<br/>";
                        }
                        }
                }
            }
            
        ?>

    </p>

    </body>
</html>
