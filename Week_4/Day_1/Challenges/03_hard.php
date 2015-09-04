<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Copy your shopping cart code from the previous challenge.
     * This time we don't want to add "Item" objects to the shopping cart. Instead, create three new classes:
     * "Book", "DVD" and "VideoGame".
     *
     * Change your shopping cart's "addItem" method so it can accept a Book, DVD or VideoGame object.
     *
     * Now make it so that books are tax-free, DVDs have 5% tax and video games have 10% tax.
     * Make sure your shopping cart can still return the total cost of items and the correct tax amount
     * the customer would need to pay.
     *
     * Bonus points: Can you implement a "removeItem" method on your shopping cart class?
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
<<<<<<< HEAD
        
         class ShoppingCart {
            public $name;
            public $price;
            public $items = array();
            public $beforeTax;
            public $tax;
            public $afterTax;
        
            public function addItem(Item $item){
                $this->items[] = $item;
            }
        
            public function getCostBeforeTax(){
                foreach($this->items as $item){
                    $beforeTax = $item->price + $beforeTax;
                }
                return $beforeTax;
            }
            public function getTaxAmount(){
                foreach($this->items as $item){
                    $calculateTax = ($item->price * $item->tax) + $calculateTax;
                }
                return $calculateTax;
            }
            public function getCostAfterTax(){
                $afterTax = ($this->getTaxAmount() + $this->getCostBeforeTax());
                return $afterTax;
            }
        }
    
        class Item extends ShoppingCart{
            public function __construct($name, $price){
                $this->name = $name;
                $this->price = $price;
            }    
            public function setTax($tax){
            $this->tax = $tax;
        }
        }
        class Book extends Item {
            public $tax = 0;
        }
    
    
        class DVD extends Item {
            public $tax = .05;
        }
    
        class VideoGame extends Item {
            public $tax = .1;
        }

        $cart = new ShoppingCart();
        $cart->addItem(new Book('Cheap Book', 2.99));
        $cart->addItem(new Book('Expensive Book', 24.99));
        $cart->addItem(new DVD('Movie', 12.99));
        $cart->addItem(new VideoGame('Video Game', 59.99));

        $beforeTax = number_format($cart->getCostBeforeTax(), 2);
        $taxAmount = number_format($cart->getTaxAmount(), 2);
        $afterTax = number_format($cart->getCostAfterTax(), 2);

        echo "<p>Total cost before tax: \$$beforeTax</p>";
        echo "<p>Tax amount: \$$taxAmount</p>";
        echo "<p>Total cost after tax: \$$afterTax</p>";

    ?>

</p>

</body>
</html>