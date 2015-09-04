<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * It's time to create a hero to dispatch these pesky monsters.
     *
     * Copy your code from the previous exercise.
     *
     * Add a SETTER method to your LivingThing class named "setHealth" that lets you update the value
     * of the "health" property.
     *
     * Now, create a NEW class "Hero" that EXTENDS the LivingThing class.
     *
     * Add a method to the Hero class named "attack" that takes as a parameter a LivingThing object.
     * The method should do three things:
     * 1. Reduce the LivingThing object's health by a random value between 0 and 10.
     * 2. Reduce the hero's health by a random value between 0 and 10.
     * 3. Print out how much damage the monster and hero did to each other.
     *
     * For help generating random numbers:
     * @see http://php.net/manual/en/function.mt-rand.php
     *
     * Give the Hero class another method named "fight" that takes as a parameter an array of LivingThing objects
     * and does the following:
     *  - For each LivingThing object in the array, call the "attack" method so the hero can attack the monster.
     *     - But, don't attack if the LivingThing is already dead!
     *  - Repeat the process until all the monsters or the hero is dead.
     *
     * Finally, you will need to create your hero object with the name "hero". Give them 100 health and a
     * name of your choice.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////
class LivingThing{
         protected $name;
         protected $health;
         
         public function isAlive(){
            if ($this -> health >0){
                return true;
            } 
            else
            {
                false;
            }
        
         }
         function __construct($name,$health){
                $this-> name = $name;
                $this -> health = $health;
         }
         public function getName(){
             return $this -> name;
         }
         
         public function getHealth(){
             return $this -> health;
         }
         public function setHealth($health){
             $this->health = $health;
         }
     }
     
    class Hero extends LivingThing{
        public function attack(LivingThing $enemyThing){
        $heroDamage= mt_rand(1,10);
        $monsterDamage = mt_rand(1,10);
        $currentHeroHealth = $this->getHealth();
        
        
        //Sets Hero health to current - damage
        $this->setHealth($currentHeroHealth - $monsterDamage);
        $enemyThing->setHealth($currentHeroHealth - $heroDamage);
        echo "Hero dealt $heroDamage, to monster";
        echo "Monster dealt $monsterDamage, to hero";
        }
        
        public function fight($monsters){
            
        }
    } 
    class Monster extends LivingThing{
        
    }
    $rat = new Monster('Rat',30);
    $goblin = new Monster('Goblin',5);
    $ogre = new Monster('Ogre',60);
    $hero = new Hero('Hero', 100);
    $monsters = array($rat,$goblin,$ogre);
    
    
        
    echo "<h3>Protecting our monsters</h3>";
    
    foreach ($monsters as $monster) {
        // Fix the line below!
        echo "<p>" . $monster->getName(). ": " . $monster->getHealth() . "</p>";
    }

    echo "<h3>A hero emerges!</h3>";

    echo "<p>The noble {$hero->getName()} has vowed to defeat the monsters and save the realm.</p>";
    echo "<p>Will they be victorious?</p>";

    $hero->fight($monsters);

    if ($hero->isAlive()) {
        echo "<p>The hero {$hero->getName()} prevailed!</p>";
    }
    else {
        echo "<p>{$hero->getName()} was bested by the monsters. We are doomed.</p>";
    }
    
    $hero->attack($rat);
    echo "<br>";
    echo "Hero health is ". $hero->getHealth();
    echo "Monster health is " . $rat->getHealth();
    ?>
    
</p>

</body>
</html>