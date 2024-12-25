// 53. Create a form that collects user preferences (e.g., background color, font size). Store
these preferences in a session and apply them to the current web page.
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['bg_color'] = $_POST['bg_color'];
    $_SESSION['font_size'] = $_POST['font_size'];
}

$bg_color = isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#ffffff';
$font_size = isset($_SESSION['font_size']) ? $_SESSION['font_size'] : '16px';
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Preferences</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($bg_color); ?>;
            font-size: <?php echo htmlspecialchars($font_size); ?>;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="bg_color">Background Color:</label>
        <input type="color" id="bg_color" name="bg_color" value="<?php echo htmlspecialchars($bg_color); ?>"><br><br>
        <label for="font_size">Font Size:</label>
        <input type="number" id="font_size" name="font_size" value="<?php echo htmlspecialchars($font_size); ?>" min="10" max="72"><br><br>
        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>
?>