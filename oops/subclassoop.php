<?php


// Inheritance
// Classes can extend other classes - they can inherit methods/properties from their parent class
// A class can only extend 1 class

// It's not just about a way of re-using code
// Using inheritance is a way of define what type something is
    // In this example, I'm not just avoiding duplication, I'm saying that cows, pigs and chickens are TYPES
    // of animal

// The things look for when considering using inheritance
// 1) Code repetition
    // If you have multiple classes that contain the same code
// 2) That the classes you're looking at are the same type of thing


// A good indicator that you should not be using inheritance:
// When you're trying to name your parent class, and you're struggling to give it a good name


// Classes can be declared abstract
// This means it can be extended from, but not instantiate
// It indiciates that the class exists for inheritance only
// If you try to instantiate an abstract class, php will throw an error
abstract class Animal {
    // Contains all the generic stuff that all animals do
    public string $name;
    public string $breed;

    // An abstract method can only be added to an abstract class
    // You cannoy define how an abstract method works
    // It's just the method signature, not it's body
    // An abstract method is a bit like a contract. 
    // It says that any class that extends from Animal MUST define it's own
    // method called eat that returns a string
    public abstract function eat(): string;

    public function sleep(): string
    {
        return 'zzzz';
    }
}


// The individual animal classes contain species specific code
// Because these classes extend the Animal, the have access to all of the properties and methods
// of the animal that are either public or protected
class Cow extends Animal {

    public function eat(): string{
        return "mmmm grass";    
    }
    
    public function makeMilk(): string
    {
        return 'milk';
    }
}

class Pig extends Animal {

    public function eat(): string
    {
        return 'mmmmmmm slop';
    }

    public function rollInSlop(): string
    {
        return 'sloppppp';
    }
}


class WildBoar extends Pig {
    public function eat(): string 
    {
        return 'mmmmmm acorns';
    }
}

class Chicken extends Animal {
    public function eat(): string
    {
        return 'mmmmmmmm grain';
    }

    public function makeEggs(): string
    {
        return 'eggs';
    }
}


$cow = new Cow();
$pig = new Pig();
$chicken = new Chicken();
$boar = new WildBoar();

animalFeeder($boar);
animalFeeder($cow);
animalFeeder($pig);
animalFeeder($chicken);

// Because we can type hint by class, and Animal is abstract with an abstract method
// We know that any animal that gets passed into this function has a public eat method
// that returns a string
// We can treat all animals the same
// We can add new animals in the future and they will fit in with the rest of our code
function animalFeeder(Animal $animal) {
    echo $animal->eat();
}




















