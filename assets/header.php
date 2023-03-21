<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <?php
        // Start session
        session_start();

        // Check if user is already logged in
        if (isset($_SESSION["voter_id"])) {
            header("Location: index.php");
            exit;
        }
    ?>
    <header>
        <h1>Logo</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="result.php">Election Result</a></li>
                <li><a href="voter_registration.php">Sign In/Up</a></li>
            </ul>
        </nav>
    </header>