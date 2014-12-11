<?php
include ('connect.php');
include ('header2.php');



// Set our input textbox values
$name = (isset($_POST['name'])) ? $_POST['name'] : FALSE;
$image = (isset($_POST['image'])) ? $_POST['image'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$password = (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;

// Server-side validation, check if those values were inputted
if (!$name) {
    die("You need to enter your name");
} else if (!$username) {
    die("You must enter a username");
} else if (!$password) {
    die("You must enter a password");
} else {
    //do nothing
}


// SQL Logic

$emailSQL = "SELECT * FROM users WHERE username = '$username'";

// If my Email SQL results return something
if ($result = $link->query($emailSQL)) {

    if ($result->num_rows >= 1) {

        die("You can't register because that username is already in use.");

    } else {

        $sql = "INSERT INTO users (name, image, username, password) VALUE ('$name','$image','$username','$password')";

        if ($link->query($sql)) {
            $last_inserted_id = $link->insert_id;
            $affected_rows = $link->affected_rows;
        } else {
            die("There was a MySQL Issue");
        }


        echo "Thank you, " . $username . " for registering for the yacht party.";
        echo "<a href='login.php'>Click here to login.</a>";

        // echo "Last inserted Id: " . $last_inserted_id;
        // echo "<pre>";
        // print_r($affected_rows);

    }


}



include('footer.php');
?>
