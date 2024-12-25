<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
</head>
<body>

  <h2>Provide Your Feedback</h2>

  <form action="submit_feedback.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="feedback">Feedback:</label><br>
    <textarea id="feedback" name="feedback" required></textarea><br><br>

    <input type="submit" value="Submit Feedback">
  </form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $feedback = $_POST["feedback"];

  $file = fopen("feedback.txt", "a"); // Open file in append mode
  fwrite($file, "$name|$email|$feedback\n"); 
  fclose($file);

  echo "Thank you for your feedback!";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $feedback = $_POST["feedback"];

  $file = fopen("feedback.csv", "a"); // Open file in append mode
  fputcsv($file, array($name, $email, $feedback)); 
  fclose($file);

  echo "Thank you for your feedback!";
}
?>