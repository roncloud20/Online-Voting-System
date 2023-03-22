<?php
    // Including the All Pagconnectiones Header
    $title = "Online Voting System";
    require_once("assets/header.php");

    // if (!isset($_SESSION['user_id'])) {
    //     header('Location: login.php');
    //     exit;
    // }

    // Connect to MySQL database
    require_once 'assets/db_connect.php';

    // Get the user's details from the database
    $voter_id = $_SESSION['voter_id'];
    $query = "SELECT * FROM voter WHERE voter_id = $voter_id";
    $result = mysqli_query($conn, $query);
    $voter = mysqli_fetch_assoc($result);

    // Close the database connection
    // mysqli_close($conn);
    ?>

<!-- HTML landing page -->
<h1>Welcome, <?php echo $voter['login_type'] . $voter['name']; ?>!</h1>
<!-- <p>Your email address is: <?php// echo $voter['email']; ?></p> -->
<!-- <p><a href="logout.php">Log out</a></p> -->