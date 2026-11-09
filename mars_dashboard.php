<?php
    session_start();

    if(!isset($_SESSION["user_id"])) {
        header("Location: mars_login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mars Dashboard</title>
        <link rel="stylesheet" href="mars.css">
    </head>
    <body>
        <header>
            <?php include 'menu.php'; ?>
            <h1><?php echo "Welcome, " . $_SESSION["user_name"]; ?></h1>
        </header>

        <main>
            <h2>Here are the training modules for the Mars Pilots</h2>
        </main>
    </body>
</html>