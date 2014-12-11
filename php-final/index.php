<?php
session_start();
include('connect.php');
include('header.php');

// If user_id is found in the session,
if (isset($_SESSION['user_id'])) {
    // Set variable $user_id to that session user's id
    $user_id = $_SESSION['user_id'];
    include('header2.php');
} else {
    // If user_id session was not found, show them a link to login
    // die('You must login first! <a href="login.php">Click here to login!</a>');
    include('header.php');
}

?>
 
<center>
   <section>
    
       <img src="https://pbs.twimg.com/profile_images/655582213/twitter.jpg" alt="">

   </section>

    
</center>

        <?php
            include 'footer.php';
        ?>

</body>
</html>
