<link rel="stylesheet" href="assets/style.css">



<?php
    // Including the All Pages Header
    $title = "Register to become a voter";
    require_once("assets/header.php");

    // including the database connect file
    require_once("assets/db_connect.php");
?>

<!-- HTML form for user registration -->
<form method="POST">
  <label for="name">First Name:</label>
  <input type="text" name="first_name" required><br><br>

  <label for="name">Last Name:</label>
  <input type="text" name="last_name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br><br>

  <label for="password">Password:</label>
  <input type="password" name="password" required><br><br>
  
  <label for="confirm_password">Confirm Password:</label>
  <input type="password" name="confirm_password" required><br><br>

  <label for="dob">Date of Birth:</label>
  <input type="date" name="dob" required><br><br>

  <input type="submit" name="submit" value="Register">
  <p>Already have an account? click <a href="login.php">Login</a> to login
</form>

<?php
    // Checking if the form has been submitted
    if (isset($_POST['submit'])) {
        // Sanitizing and validating input data
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);

        // Validate form data
        // Checking the password
        if ($password != $confirm_password) {
            echo "Error: Passwords do not match";
            exit();
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }

        // Check if email already exists
        $sql = "SELECT * FROM voter WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Error: Email address is already registered";
            exit();
        }

        // Inserting the user data into the database
        $query = "INSERT INTO voter (first_name, last_name, email, password, date_of_birth, login_type, is_verified) VALUES ('$first_name', '$first_name', '$email', '$hashed_password', '$dob', 'voter', true)";

        // check if the query was successful
        if (mysqli_query($conn, $query)) {
            echo "Registration successful";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<!-- 
if (mysqli_query($conn, $query)) {
    // send verification email
    $to = $email;
    $subject = 'Verify your email';
    $message = 'Please click the following link to verify your email address: https://onlinevotingsystem.com/verify.php?email=' . urlencode($email);
    $headers = 'From: verification@onlinevotingsystem.com' . "\r\n" .
                'Reply-To: verification@onlinevotingsystem.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    $sent = mail($to, $subject, $message, $headers);

    // display success message
    if ($sent) {
        echo "<p>Registration successful! A verification email has been sent to your email address.</p>";
    } else {
        echo "<p>Error sending verification email.</p>";
    }
    } else {
    echo "<p>Error: " . $db->error . "</p>";
    } -->