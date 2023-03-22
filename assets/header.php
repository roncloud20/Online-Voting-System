<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
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

                    <a href="index.php">           
                    <div id="headerSection">
                        <img width="269" height="75" src="assets/logo.png" class="custom-logo" alt="INEC Nigeria"><br>
                    </a>
                      <h4>
                        <span class="">Phone: <label>0700-CALL-INEC</label></span>
                        <span class="">Address:<label>Plot 436 Zambezi Crescent,<br> Maitama District, FCT, Abuja, NIGERIA</label>
                       </span>     
                      </h4>          

                   <h1>Online Voting System</h1>
                </div>
                    <hr>
    
    <header>  
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="result.php">Election Result</a></li>
                <?php if(isset($_SESSION["login_type"]) && $_SESSION["login_type"] == "voter") { ?>
                    <li><a href="voting.php">Voting</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else if(isset($_SESSION["login_type"]) && $_SESSION["login_type"] == "admin") { ?>
                    <li><a href="register_candidate.php">Register Candidate</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else if(!isset($_SESSION["login_type"])) { ?>
                    <li><a href="voter_registration.php">Sign In/Up</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>