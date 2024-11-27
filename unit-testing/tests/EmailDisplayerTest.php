<?php

use PHPUnit\Framework\TestCase;

require_once "src/EmailDisplayer.php";
require_once 'src/EmailAddress.php';

class EmailDisplayerTest extends TestCase
{
    public function testEmailDisplayer_mailto()
    {

        //This is not a unit test because we are testing both
        //the EmailAddress and the EmailDisplayer -integration test

        //when the thing (function,class) you're testing needs to be given
        //some other object we create a mock
        //we mock the dependency -when one object needs another


        //A mock is a fake version of an object
        // createMock makes a stripped out version of our object

    //    $input = new EmailAddress(email: 'test@test.com');

        $emailMock = $this->createMock(originalClassName: EmailAddress::class);
        //We can then give the mock fake methods that mimic the real ones


        $emailMock->method( '__toString')->willReturn('test@test.com');
        //start with name of class and method

        $actual = EmailDisplayer::displayMailTo($emailMock);


        $expected = "<a href='mailto:test@test.com'>test@test.com</a>";

        $this->assertEquals($expected, $actual);
    }

    public function testEmailDisplayer_diplayExternal()

    {
        $emailMock = $this->createMock(originalClassName: EmailAddress::class);
        $emailMock->method( '__toString')->willReturn('test@test.com');

        $actual = EmailDisplayer::display($emailMock);
        $expected = "<div><h3>Email Address</h3><p>test@test.com</p></div>";

        $this->assertEquals($expected, $actual);

    }

    public function testEmailDisplayer_diplayInternal()

    {
        $emailMock = $this->createMock(originalClassName: EmailAddress::class);
        $emailMock->method( '__toString')->willReturn('test@io-academy.uk');

        $actual = EmailDisplayer::display($emailMock);
        $expected = "<div><h3>Internal Email Address</h3><p>test@io-academy.uk</p></div>";

        $this->assertEquals($expected, $actual);

    }


}
