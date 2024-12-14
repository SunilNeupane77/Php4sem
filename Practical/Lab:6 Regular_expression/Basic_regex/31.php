// 31. Create a script that validates an email address format using a regular expression.
<?php
// Define an email address to validate
$email = "example@domain.com";

// Define the regular expression for a valid email address
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Validate the email address using preg_match()
if (preg_match($pattern, $email)) {
    echo "The email address '$email' is valid.";
} else {
    echo "The email address '$email' is invalid.";
}
?>
