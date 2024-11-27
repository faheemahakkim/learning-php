<?php

use PHPUnit\Framework\TestCase;

require_once 'src/EmailDisplayer.php';
require_once 'src/EmailAddress.php';

class EmailDisplayerTest extends TestCase
{
    public function testEmailDisplayer_mailto()
    {
        // This is not a unit test because we are testing both
        // the EmailAddress and the EmailDisplayer - integration test

        // When the thing (function, class) you're testing needs to be given
        // some other object -  we create a mock
        // We mock the dependency - when one object needs another

        // A mock is a fake version of an object
        // createMock makes a stripped out version of our object
        $emailMock = $this->createMock(EmailAddress::class);
        // We can then give the mock fake methods that mimic the real ones
        $emailMock->method('__toString')->willReturn('test@test.com');

        $actual = EmailDisplayer::displayMailTo($emailMock);

        $expected = "<a href='mailto:test@test.com'>test@test.com</a>";
        
        $this->assertEquals($expected, $actual);
    }

    public function testEmailDisplayer_displayInternal()
    {
        $emailMock = $this->createMock(EmailAddress::class);
        $emailMock->method('__toString')->willReturn('test@io-academy.uk');

        $actual = EmailDisplayer::display($emailMock);
        $expected = "<div><h3>Internal Email Address</h3><p>test@io-academy.uk</p></div>";

        $this->assertEquals($expected, $actual);
    }

    public function testEmailDisplayer_displayExternal()
    {
        $emailMock = $this->createMock(EmailAddress::class);
        $emailMock->method('__toString')->willReturn('test@test.com');

        $actual = EmailDisplayer::display($emailMock);
        $expected = "<div><h3>Email Address</h3><p>test@test.com</p></div>";

        $this->assertEquals($expected, $actual);
    }
}