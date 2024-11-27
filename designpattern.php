<?php

//Design patterns
// class TempSensor {
//     private string $name;
//     private int $minTemp;
//     private int $maxTemp;
//     private int $currentTemp;

//     public function getName(): string
//     {
//         return $this->name;
//     }

//     public function getMinTemp(): int
//     {
//         return $this->minTemp;
//     }

//     public function getMaxTemp(): int
//     {
//         return $this->maxTemp;
//     }

//     public function getCurrentTemp(): int
//     {
//         return $this->currentTemp;
//     }

//     public function setName(string $name): void
//     {
//         $this->name = $name;
//     }

//     public function setMinTemp(int $minTemp): void
//     {
//         if ($minTemp > 2 && $minTemp <= 6) {
//             $this->minTemp = $minTemp;
//         }
//     }

//     public function setMaxTemp(int $maxTemp): void
//     {
//         $this->maxTemp = $maxTemp;
//     }

//     public function setCurrentTemp(int $currentTemp): void
//     {
//         $this->currentTemp = $currentTemp;
//     }

// }

// $sensor = new TempSensor();




// <?php

// $email = $_POST['email'];

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo 'Oh no, that is not a valid email address. Try again';
// }

// // There is nothing stopping you from accidentally changing
// // or breaking the email address
// $email = 'info@company.com';


// // More code to save the email address in a database








// <?php

// Value-object pattern
// Solving the problem of variables being unreliable
// And type hints like string being vague

// A class designed to hold a single value (email address) reliably

// class EmailAddress {
//     private string $email;

//     public function __construct(string $email)
//     {
//         // Check to make sure the email is valid
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             // If it's not, throw an error and crash the program
//             throw new Exception('Invalid email');
//         }

//         $this->email = $email;
//     }
//     // __toString allows you to echo the object - it defines how to convert the object
//     // into a string so that it can be displayed
//     public function __toString(): string
//     {
//         // Whatever __toString returns is what gets displayed on the page when you echo it
//         return $this->email;
//     }
// }

// $customersEmail = new EmailAddress('bob@bob.com');

// echo $customersEmail;


// <?php

// Value-object pattern
// Solving the problem of variables being unreliable
// And type hints like string being vague

// A class designed to hold a single value (email address) reliably

class EmailAddress {
    private string $email;

    public function __construct(string $email)
    {
        // Check to make sure the email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // If it's not, throw an error and crash the program
            throw new Exception('Invalid email');
        }

        $this->email = $email;
    }
    // __toString allows you to echo the object - it defines how to convert the object
    // into a string so that it can be displayed
    public function __toString(): string
    {
        // Whatever __toString returns is what gets displayed on the page when you echo it
        return $this->email;
    }
}

$customersEmail = new EmailAddress('bob@bob.com');

echo $customersEmail;

//
//sendNewsletter($customersEmail);
//
function sendOrderEmail(EmailAddress $email) {
    // Now we can trust that $email is what we expect
}

function sendNewsletter(EmailAddress $email) {
    // Now we can trust that $email is what we expect
}







