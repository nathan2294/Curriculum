<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
<<<<<<< HEAD
    <?php
=======
    <?
>>>>>>> upstream/master
        /**
         * So we want to create a feature that allows you to store your movies in our 'cloud'.
         *
         * We want to make sure that you can find and catalog your movies correctly, so we
         * would like to give users the ability to provide a description of these movies.
         *
         * We want users to also see any products they have ordered on the same page.
         *
         * Create a class called CloudMovieFile that also implements the Describable interface.  Use your imagination on
         * how this should describe itself.  Create an instance of Cloud movie.  Now create a Clothing object and a
         * Television object from the classes you built in the previous exercise.  Put these 3 objects in an array
         * names $customerItems.
         *
         * Create a new class called ItemDescriber.  Item describer should contain a method called
         * outputDescription.  This method should take an object that implements the Describable interface
         * as a parameter.  If the parameter does not implement the Describable interface, throw an exception
         * Otherwise, the outputDescription method should printout the description of the object that is passed in.
         *
         * @see  http://php.net/manual/en/language.operators.type.php
         *
         * For each object in the array, use the ItemDescriber to print out the description of all of your Describable
         * objects.
         *
         * Note that we can treat anything that wants to implment describable exactly the same, whether it is a
         * Product or a CloudMovieFile.  You could even create a Person class that implements Describable and
         * run it through the ItemDescriber method.
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
<<<<<<< HEAD
        
        
        
        interface Describable {
          public function provideDescription(); 
        }
        
        abstract class Product implements Describable{
          protected $name;
          protected $price;
          protected $brand;

          public function __construct($name, $brand, $price){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
          }
          
          abstract function provideDescriptionForProductType();
      
          public function provideDescription(){
            return $this->provideDescriptionForProductType();
          }
        }
        
        class Television extends Product {
          protected $displayType;
          protected $size;
          
          public function __construct($name, $brand, $price, $displayType, $size){
            parent::__construct($name, $brand, $price);
            $this->displayType = $displayType;
            $this->size = $size;
          }
          
          public function provideDescriptionForProductType(){
            return "This is a " . $this->size . " " . $this->brand . " " . $this->displayType . " Television";
          }
        }
        
        class Clothing extends Product {
          protected $size;
          protected $type;
          protected $color;
          protected $gender;
      
          public function __construct($name, $brand, $price, $type, $size, $color, $gender){
            parent::__construct($name, $brand, $price);
            $this->size = $size;
            $this->type = $type;
            $this->color = $color;
            $this->gender = $gender;
          }
          
          public function provideDescriptionForProductType(){
            return "This is an article of clothing. It is a " . $this->brand . " " . $this->color . " " . $this->gender . " " . $this->type . " of size " . $this->size .  " it costs " . $this->price; 
          }
        }
        
        class CloudMovieFile implements Describable{
          public function provideDescription(){
            return "Best movie ever!";
          }
          
        }
        
        
        
        class ItemDescriber{
          public function outputDescription($product){
            
            if($product instanceof Describable){
              $i=$product->provideDescription();
            }
            else
            {
              throw new Exception("No description provided");
            }
            return $i;
          }
        }
        $itemDescriber=new ItemDescriber();
        //$itemDescriber->outputDescription($buttonDownShirt);
        
        
        $buttonDownShirt = new Clothing("Button Down Shirt","J Peterman", 29.88, "shirt", "medium", "Eye-piercingly bright red", "Male");
        $kramericaTV = new Television("Giant TV", "Kramerica", 3900.90, "LED", "100in");
        $cloud=new CloudMovieFile();
        $customerItems=array($cloud,$buttonDownShirt,$kramericaTV);
        
        try{
          
          foreach($customerItems as $customerItem){
            echo $itemDescriber->outputDescription($customerItem);
            echo "<br/>";
          }
        }catch(Exception $e){
          echo $e->getMessage();
          echo "<br/>";
        }
        
        
=======
>>>>>>> upstream/master
    ?>
    </p>
  </body>
</html>