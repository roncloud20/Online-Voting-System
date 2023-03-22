<link rel="stylesheet" href="assets/style.css">



<?php
    //Adding the header file
    $title = "User Login";
    require_once 'assets/header.php'; 

    // Connect to MySQL database
    require_once 'assets/db_connect.php';

    // Check if the login form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are valid
    $query = "SELECT * FROM voter WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $voter = mysqli_fetch_assoc($result);
        if (password_verify($password, $voter['password'])) {
            // Login successful, save the user ID in the session
            $_SESSION['voter_id'] = $voter['id'];
            $_SESSION['login_type'] = $voter['login_type'];
            header('Location: index.php');
            exit;
        }
    }

    // Login failed, show an error message
    $error = 'Invalid email or password.';
    }

    // Close the database connection
    mysqli_close($conn);
?>

<!-- HTML login form -->
<h1>Login</h1>
<?php if (isset($error)) { ?>
<p><?php echo $error; ?></p>
<?php } ?>
<form method="POST">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Log in</button>
</form>