<?php
if (isset($_SESSION["username"]) && isset($_SESSION["phoneNo"])) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Room</title>
    <link rel="stylesheet" href="Css/style.css" />
  </head>

  <body>
    <h1>Sunil Chat Room</h1>
    <div class="chat">
      <h2>Welcome to <span>user</span></h2>
      <div class="msg">
        <p>
          <span>user:
            <br />
            Sunil Neupane Send Message to you
          </span>
        </p>
        <p class="sender">
          <span>user :</span>
          random message is here
        </p>
      </div>
      <div class="input_msg">
        <input type="text" />
        <button>Send</button>
      </div>
    </div>
  </body>

  </html>

  <?php
} else {
  header("location:login.php");
}


?>