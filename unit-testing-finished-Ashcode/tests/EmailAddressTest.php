<?php

use PHPUnit\Framework\TestCase;

require_once 'src/EmailAddress.php';

class EmailAddressTest extends TestCase {
    public function testEmailAddress_invalidEmail()
    {
        $input = 'test';

        // Each of these is an assertion
        $this->expectException(Exception::class);
        // Checking for a specific error message
        $this->expectExceptionMessage('Invalid email address');

        // No need to store this in a variable since
        // we're testing for an exception
        new EmailAddress($input);
    }

    public function testEmailAddress_validEmail()
    {
        $input = 'test@test.com';

        $actual = new EmailAddress($input);
        // Used to make sure the result is the correct object
        // This method (assertInstanceOf) is used when testing
        // the __construct method
        // Since the construct methods job is to return (automatically)
        // the object we asked for
        $this->assertInstanceOf(EmailAddress::class, $actual);
    }

    public function testEmailAddress_toString()
    {
        $input = 'test@test.com';

        $actual = new EmailAddress($input);
        $expected = 'test@test.com';

        $this->assertEquals($expected, $actual);
    }
}