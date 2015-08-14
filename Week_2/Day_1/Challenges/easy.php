<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

          	    // code goes here ...
          	    while($rand != 7)
          	    {
          	      $rand= rand(1,7);
          	      echo $rand;
          	      echo "<br/>";
          	    }

            ?>
        </p>
	</body>
</html>