<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <h1>Color my food</h1>
      <br />
        <?php
        /**
        * I want to color code my fruits, vegtables and everything else is junk using color codes
        * but if your age is below 5 everything is junk and you dont want to eat it
        * 
        * We should use a if/else if/else statement because we have to compare multiple variables
        */
       
        // food you are looking up
        $food = 'grape';
        $age = '6';

        // Fruits
        if(($food == "grape" || $food == "lemon" || $food == "orange"  || $food == "banana") && $age > 5){
          $style = '#FF2424'; // redish color
        }
        // vegetables
        else if(($food == "tomato" || $food == "carrot" || $food == "pumpkin"  || $food == "lettuce") && $age > 5){
          $style = '#4AFF4A'; // greenish color
        }
        // junk
        else{
          $style = '#966524'; // brown like poo
        }

        ?>
       <p style="color: <?=$style?>">
         <?= $food ?>
       </p>
	</body>
</html>