<?php
// Creating a test file - starting point

use PHPUnit\Framework\TestCase;

// Step 1: Require in the file we're testing
require_once 'src/addPositive.php';

// Step 2: Create a test class with the same name as the file
// extend phpunits TestCase class
class addPositiveTest extends TestCase {
    // Step 3: Each test is written in this class
    // This is where you write the tests for the thing you are testing

    // test methods must start with the word test
    // make the names descriptive - it should be obvious from
    // reading the name of the test, what it does
    public function testAddPositive_twoPositiveNumbers()
    {
        // Arrange - getting any data ready you need for the test
            // Input data, mocks
        $inputA = 10.5;
        $inputB = 6;

        // Act - call the function you're testing
        $actual = addPositive($inputA, $inputB);
        $expected = 16.5; // What should we get?

        // Assert - assert that the actual result matches what we expected
        // If $expected matches $actual, the test passes
        // otherwise the test fails
        // It is important that you pass in expected first!
        $this->assertEquals($expected, $actual);
    }

    public function testAddPositive_twoNegativeNumbers()
    {
        $inputA = -5;
        $inputB = -1.2;

        // When testing that an exception is thrown
        // make sure you tell it to expect the exception first
        $this->expectException(Exception::class);

        // No need to store the result in a variable for this test
        // The exception should be thrown so addPositive won't return
        // anything at all
        addPositive($inputA, $inputB);
    }
}
