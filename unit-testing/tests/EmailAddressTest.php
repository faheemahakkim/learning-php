<?php


require_once 'src/EmailAddress.php';

class EmailAddressTest extends \PHPUnit\Framework\TestCase
{
public function testEmailAddress_invalidEmail()
    {
        $input = 'test';

        //each of these in assertion
        $this->expectException(Exception::class);
        //checking for a specific error message
        $this->expectExceptionMessage('Invalid email address');


        //no need to store this in a variable since
        //we're testing for an exception

        new EmailAddress($input);
}
public function testEmailAddress_validEmail()
{
    $input = 'test@example.com';

    $actual = new EmailAddress($input);
    //Used to make sure the result is the correct object
    //this method (assertInstanceOf) is used when testing
    //the __construct method
    //since the construct method job is to return automatically
    //the object we asked for

    $this->assertInstanceOf(EmailAddress::class, $actual);

}

public function testEmailAddress_toString()
{
    $input = 'test@example.com';

    $actual = new EmailAddress($input);
    $expected = 'test@example.com';
    $this->assertEquals($expected, $actual);
}
}