<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <title>Funeral home</title>
  </head>

  <body>

  <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name2 = htmlspecialchars($_POST["name2"]);
                $email2 = htmlspecialchars($_POST["email2"]);
                $message = htmlspecialchars($_POST["message"]);

                echo "<p><strong>Όνομα:</strong> $name2</p>";
                echo "<p><strong>Email:</strong> $email2</p>";
                echo "<p><strong>Μήνυμα:</strong> $message</p>";
            } else {
                echo "<p>Δεν υποβλήθηκαν δεδομένα.</p>";
            }
        ?>
  </body>

  </html>