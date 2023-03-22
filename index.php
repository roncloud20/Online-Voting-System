
<link rel="stylesheet" href="assets/style.css">




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

    // // Get the user's details from the database
    // $voter_id = $_SESSION['voter_id'];
    // $query = "SELECT * FROM voter WHERE voter_id = $voter_id";
    // $result = mysqli_query($conn, $query);
    // $voter = mysqli_fetch_assoc($result);

    // Close the database connection
    // mysqli_close($conn);
    ?>

<!-- HTML landing page -->
    <h1>Welcome, <?php echo $voter['login_type'] . $voter['name']; ?>!</h1>
      <p>Your email address is: <?php// echo $voter['email']; ?></p>
      <p><a href="logout.php">Log out</a></p>



<div id="sidebar">

            <aside>
                <h2>Voting Rules and Regulations</h2>
                <ul>
                    <li>No person shall be allowed to vote except for those who have registered to vote 
                        and as such accredited.</li>
                    <li>All voters can only cast a single vote in any category of election. 
                        This means that a voter cannot vote two contenstant from the same category or post.</li>
                    <li>Voting exercises are expected to be carried out within the 
                        specified voting window period.</li>
                </ul>
            
        
           
                <h2>Voters Rights</h2>
                <ul>
                    <li>Right to register</li>
                    <li>Right to vote and be voted for</li>
                    <li>Right to Information about Election</li>
                </ul>
           

                
                <h2>Voters Responsibilities</h2>
                <ul>
                    <li>Responsibility to register.</li>
                    <li>Responsibility to follow all the guidelines of the voting exercise.</li>
                    <li>Responsibility to enlighten others about the benefits of 
                        participating in the election.</li>
            </ul>
            
        </aside>
</div>

<img src="assets/votingimage.jpg" alt="Nigerian Map "style="float:Right;">


       
    
       
    
         <p>
            <h3> Welcome to the online voting system. <br>
            Do remember that it is your right to vote and be voted for.<br> 
            This platform will enable a free and fair election.</h3>
         </p><br><br><br>

         
   

    <!-- <div class="img">

    
         <img src="assets/voter.png" alt="vote Nigeria ">

    </div> -->

         <!-- <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Quaerat nulla provident laborum neque, officia maxime, voluptas, 
            nobis nesciunt quia dolores dolor. Ullam sed quos quaerat dolores omnis consequatur est facilis.
         </p><br><br><br>

         <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Quaerat nulla provident laborum neque, officia maxime, voluptas, 
            nobis nesciunt quia dolores dolor. Ullam sed quos quaerat dolores omnis consequatur est facilis.
         </p><br><br><br>

         <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Quaerat nulla provident laborum neque, officia maxime, voluptas, 
            nobis nesciunt quia dolores dolor. Ullam sed quos quaerat dolores omnis consequatur est facilis.
         </p><br><br><br> -->





         <!-- <div class=footer>
            <footer>

    
                <h2 > <B style="text-align: center; margin-left: 500px;">CONNECT WITH US</B>  </h2>
                <img id="inec_logo" src="assets/ineclogo.png" alt="Independent National Electoral Commission"/>
                
                 <h3 style="text-align: center; margin-left: 500px;"> Independent National Electoral Commission, <br>
                    Maitama, Abuja, 900271, Nigeria </h3>
                 <h3 style="text-align: center; margin-left: 500px;">  Phone: 0700-CALL-INEC </h3>
                <ul style="text-align: center; margin-left: 500px;">
                    <li><a href="https://www.facebook.com/inecnigeria"><img src="assets/images/facebooklogo.png" alt="Facebook"></a></li>
                    <li><a href="https://www.twitter.com/inecnigeria"><img src="assets/images/twitterlogo.png" alt="Twitter"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCNtDUTMXaUM7kUES1FomDSA"><img src="assets/images/youtubelogo.png" alt="YouTube"></a></li>
                    <li><a href="https://www.instagram.com/inecnigeria/"><img src="assets/images/instagramlogo.png" alt="Instagram"></a></li>
                   
                    </ul>
                
                    
                 
                
                
                  <p style="text-align: center; margin-left: 500px;"> Copyright &copy 2023, Independent National Electoral Commission. All rights reserved.</p>
    
                
              
            </footer> -->