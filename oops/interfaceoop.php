<?php
// <?php

// // Interfaces

// // Interfaces are like contracts that implementing classes must follow
// // They are a like abstract methods but without a class/inheritance

// // Interfaces are a way of forcing consistency between unrelated classes
// // They give us the benefits of abstract methods without creating inheritance family trees

// interface Displayable {
//     public function display(): string;
// }

// class Product implements Displayable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display a product';
//     }
// }

// class Order implements Displayable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display an Order';
//     }
// }

// class Basket implements Displayable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display a shopping basket';
//     }
// }

// class Customer implements Displayable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display a customer';
//     }
// }

// Interfaces

// Interfaces are like contracts that implementing classes must follow
// They are a like abstract methods but without a class/inheritance

// Interfaces are a way of forcing consistency between unrelated classes
// They give us the benefits of abstract methods without creating inheritance family trees

// You can interfaces whatever you want
// it's common to end them able
interface Displayable {
    // Interfaces can ONLY contain method signatures
    // They can only specify what methods a class MUST have, not how they work
    public function display(): string;
}

interface Emailable {
    public function email(): string;
}

class Product implements Displayable, Emailable {
    public function display(): string
    {
        return 'Whatever code we need to display a product';
    }

    public function email(): string
    {
        return 'Whatever code we need run in order to email a product overview';
    }
}

class Order implements Displayable, Emailable {
    public function display(): string
    {
        return 'Whatever code we need to display an Order';
    }

    public function email(): string
    {
        return 'Whatever code we need run in order to email an order summary';
    }
}

class Basket implements Displayable, Emailable {
    public function display(): string
    {
        return 'Whatever code we need to display a shopping basket';
    }

    public function email(): string
    {
        return 'Whatever code we need run in order to email a basket reminder';
    }
}

class Customer implements Displayable {
    public function display(): string
    {
        return 'Whatever code we need to display a customer';
    }
}


$product = new Product();
$customer = new Customer();

displayContentOnPage($product);
displayContentOnPage($customer);

sendEmail($product);

sendEmail($customer);


function displayContentOnPage(Displayable $thingToDisplay) {
    echo $thingToDisplay->display();
}


function sendEmail(Emailable $thingToEmail) {
    echo $thingToEmail->email();
}
        //Notes

// // Because this class is abstract, we cannot instantiate it
// // abstract class Product {

// // }

// // // This fails because Product is abstract
// // $product = new Product()

// // // This is allowed - abstract clasess exist so we can extend from them
// // class VirtualProduct extends Product {

// // }

// // // Because this class is abstract, we cannot instantiate it
// // abstract class Product {

// // }

// // // This fails because Product is abstract
// // $product = new Product()

// // // This is allowed - abstract clasess exist so we can extend from them
// // class VirtualProduct extends Product {

// // }

// abstract class Product {
// 	public abstract function display(): string;
// }

// // This is broken. VirtualProduct does not have a display method
// class VirtualProduct extends Product {
// 	// Because this class extends from Product, and product has the abstract display 
// 	// method(display), this class must define it's own version of display()
// }

// // This works - it meets the contract
// class LargeProduct extends Product {
// 	// It defines its own version of display - the abstract method is happy
// 	public function display(): string
// 	{
// 		return 'stuff to display the product';
// 	}
// }
// abstract class Product {
// 	public abstract function display(): string;
	
// 	public function getFormattedPrice(): string
// 	{
// 		return "£$this->price";
// 	}
// }



// interface Displayable {
//     // Interfaces can ONLY contain method signatures
//     // They can only specify what methods a class MUST have, not how they work
//     public function display(): string;
// }

// // Broken! Product implements Displayable but does not have a display method
// class Product implements Displayable {

// }

// // Works! It has the display method required by the interface. 
// class Order implements Displayable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display an Order';
//     }
// }


// interface Displayable {
//     public function display(): string;
// }

// interface Emailable {
//     public function email(): string;
// }

// class Product implements Displayable, Emailable {
//     public function display(): string
//     {
//         return 'Whatever code we need to display a product';
//     }

//     public function email(): string
//     {
//         return 'Whatever code we need run in order to email a product overview';
//     }
// }



