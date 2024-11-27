<?php

require_once 'src/EmailAddress.php';

class EmailDisplayer {
    public static function display(EmailAddress $address): string
    {
        if (str_ends_with($address, '@io-academy.uk')) {
            return "<div><h3>Internal Email Address</h3><p>$address</p></div>";
        }
        return "<div><h3>Email Address</h3><p>$address</p></div>";
    }

    public static function displayMailTo(EmailAddress $address): string
    {
        return "<a href='mailto:$address'>$address</a>";
    }
}