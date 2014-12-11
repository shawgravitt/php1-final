<?php
include('header.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Account</title>
</head>
<body>
    <div style="text-align: center">
        <h2>Register a new account!</h2>
        <form action="process_register.php" method="POST">

            <input type="text" name="name" placeholder="Name"> <br />
            <input type="text" name="image" placeholder="Image URL"> <br />
            <input type="text" name="username" placeholder="Username"> <br />
            <input type="password" name="password" id="pass1" placeholder="Password"> <br />
            <input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;" placeholder="Confirm Password"> <br />

            <input type="submit" value="Join the Yacht Party!">

        </form>
    </div>





<?php include('footer.php') ?>
</body>
</html>
