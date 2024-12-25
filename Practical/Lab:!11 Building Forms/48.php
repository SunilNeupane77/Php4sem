// Create a simple HTML form with fields for first name, last
name,gender,age,country,skills, email and comments. Submit the form to a PHP script
that displays the submitted data.

<!DOCTYPE html>
<html>
<head>
  <title>User Information Form</title>
</head>
<body>

  <h2>User Information</h2>

  <form action="process_form.php" method="post">
    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" min="0" required><br><br>

    <label for="country">Country:</label><br>
    <select id="country" name="country" required>
      <option value="">Select Country</option>
      <option value="USA">USA</option>
      <option value="Canada">Canada</option>
      <option value="UK">UK</option>
      <option value="India">India</option>
      </option>
    </select><br><br>

    <label for="skills">Skills:</label><br>
    <select id="skills" name="skills[]" multiple>
      <option value="HTML">HTML</option>
      <option value="CSS">CSS</option>
      <option value="JavaScript">JavaScript</option>
      <option value="Python">Python</option>
      <option value="Java">Java</option>
    </select><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="comments">Comments:</label><br>
    <textarea id="comments" name="comments"></textarea><br><br>

    <input type="submit" value="Submit">
  </form>

</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $skills = implode(", ", $_POST["skills"]); 
  $email = $_POST["email"];
  $comments = $_POST["comments"];

  echo "<h2>Submitted Data:</h2>";
  echo "<p>First Name: " . $firstname . "</p>";
  echo "<p>Last Name: " . $lastname . "</p>";
  echo "<p>Gender: " . $gender . "</p>";
  echo "<p>Age: " . $age . "</p>";
  echo "<p>Country: " . $country . "</p>";
  echo "<p>Skills: " . $skills . "</p>";
  echo "<p>Email: " . $email . "</p>";
  echo "<p>Comments: " . $comments . "</p>";
}

?>