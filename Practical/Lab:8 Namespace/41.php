//Create a namespace MyApp and define a class User with properties username and email.
Create another namespace MyApp\Utils with a class Validator that has a static method
isValidEmail(). Use this method in the User class to validate the email property.

<?php
namespace MyApp;

class User
{
    private $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;

        if (\MyApp\Utils\Validator::isValidEmail($email)) {
            $this->email = $email;
        } else {
            throw new \InvalidArgumentException("Invalid email format.");
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

namespace MyApp\Utils;

class Validator
{
    public static function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

// Usage example
try {
    $user = new \MyApp\User("JohnDoe", "johndoe@example.com");
    echo "Username: " . $user->getUsername() . "\n";
    echo "Email: " . $user->getEmail() . "\n";
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage();
}
?>
