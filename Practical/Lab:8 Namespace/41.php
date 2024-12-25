use MyApp\Utils\Validator;

<?php
namespace MyApp;


class User {
    public $username;
    public $email;

    public function __construct($username, $email) {
        $this->username = $username;
        if (Validator::isValidEmail($email)) {
            $this->email = $email;
        } else {
            throw new \Exception("Invalid email address");
        }
    }
}

namespace MyApp\Utils;

class Validator {
    public static function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
?>