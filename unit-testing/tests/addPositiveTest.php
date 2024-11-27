<?php
//Creating  a test file

//Step:1 Require in the file we're testing

use PHPUnit\Framework\TestCase;

require_once "src/addPositive.php";

//step:2 :Create a test class with the same name as the file
//extend phpunits TestCase class

class addPositiveTest extends TestCase {

    //step 3:Each test is written in this class
    // This is where you write the tests for the thing you are testing


    //test methods must start with the word test
    //making the names descriptive -it should be obvious from
    //reading the name of test what it does

public function testAddPositive_twoPositiveNumbers(){

    //Arrange,Act,Assert


    //Arrange -getting any data ready you need for the test
            //Input data , mocks

    $inputA = 10;
    $inputB = 20.8;


    //Act -call the function you're testing
    $actual = addPositive($inputA,$inputB);
    $expected = 30.8;//what should we get?


    //Assert-assert that the actual result matches what we expected
    //if $expected matches $actual , the test passes
    //otherwise test fails
    $this->assertEquals($expected, $actual);
}
public function testAddPositive_twoNegativeNumbers(){
    $inputA = -10;
    $inputB = -20.8;




    // When testing that an exception is thrown
    // make sure you tell it to expect the exception first
    $this->expectException(Exception::class);

    // No need to store the result in a variable for this test
    // The exception should be thrown so addPositive won't return
    // anything at all
    addPositive($inputA, $inputB);
}
}