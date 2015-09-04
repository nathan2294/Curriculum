<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * If you can't find a function you need in PHP, you can create it!
         * Let's modify our previous exercise to print the score for every name.
         */

        // Create a function to clean the name and 
        // print out the person's name and their "score"
        function score($name)
        {
            $name = ucwords(strtolower(trim($name)));
            // Multiply the position of the letter 'a' (case insensitive) in the name by the
            // length of the last name divided by the number of words in the string
            $posA=stripos($name,"a");//my character pos function
            $parts= explode(' ', $name);
            $last = array_pop($parts);
            $lenLast= strlen($last);//My last name lenght
            $numWords=str_word_count($name);//My number of words in string
            $score = $posA * $lenLast / $numWords;
            
            echo "$name: $score";

        }

        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];
        
        
        array_push($names,'Bob Ark');
        array_push($names,'Derek Wall');
        
        foreach($names as $name){
            score($name);
            echo "<br/>";
        }

        // Add a couple extra names to the $names array


        // loop through our names and call our function


        ?>

    </p>

    </body>
</html>