<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Tax Calculator
             * Create a function that calculates the cost with tax of an item
             * The function must accept 2 parameters. $cost and $tax
             * The function must return the $meal_cost with tax
             * Print the results to the screen in the format:
             * Vince went to FL to buy some Mellow Mushroom, it costed him $106.50
             */

            $state_tax = array('NC' => 0.07, 'NY' => .094, 'FL' => 0.065);
            $people = array(
                'Eric' => array('state' => 'NC', 'meal' => 74.10, 'food' => 'Bad Daddys'),
                'Vince' => array('state' => 'FL', 'meal' => 100, 'food' => 'Mellow Mushroom'),
                'James' => array('state' => 'NY', 'meal' => 4500, 'food' => 'Mc Donalds')
            );
        
            function calculateTax($meal_cost,$tax) {
                
                $price = ($meal_cost*$tax)+$meal_cost;
                
                return $price;
            }
            
            foreach($people as $name =>$key){
                
                $tax=$state_tax[$key['state']];
                $meal_cost= $key['meal'];
                
                $price = ($meal_cost*$tax)+$meal_cost;//calculateTax($meal_cost,$tax);
                              
                echo "$people[$key] went to $key[state] to buy some $key[food], it cost him $price";
                echo "<br/>";
            }



        ?>

    </p>

    </body>
</html>
