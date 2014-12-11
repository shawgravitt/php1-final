<?php

include('connect.php');


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    include('header2.php');
} else {
    die('You must login first! <a href="login.php">Click here to login!</a>');
    include('header1.php');
}

?>


<center>
    <?php
        // $sqlQuery = "SELECT * FROM users WHERE id = $users_id";

        // $results = $link->query($sqlQuery);
        // $rows = $results->num_rows;

        // if ($rows >= 1) {
        //     // Do something

        //     while ($row = $results->fetch_assoc()) {
        //         echo "<div><img src='". $row['image'] ."'></div>";
        //         echo $row['name'];
        //     }

        // } else {
        //     // No rows, no results from query
        //     echo "No results";
        // }

    ?>


    <?php 
    	$all_users = 'SELECT username FROM users';
    	$results = $link->query($all_users);
        $rows = $results->num_rows;

        if ($rows >= 1) {

            while ($row = $results->fetch_assoc()) {
                
               
            }

        } else {
            // No rows, no results from query
            echo "No results";
        }

    ?>
    

<div class="commentContainer">

    <?php

/* SELECT ALL
    FROM first_table
    INNER JOIN
    second_table
    ON
    first_table.FIELD = second_table.FIELD
*/

    $commentSqlQuery = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id WHERE to_user_id = $user_id";

        $comments_results = $link->query($commentSqlQuery);
        $comment_rows = $comments_results->num_rows;

        if ($comment_rows >= 1) {
            // Has comments

            while ($comment_row = $comments_results->fetch_assoc()) {

                    // Avatar + username
                    echo '<figure class="avatar">';
                    echo '<img src="'. $comment_row["image"]  .'">';
                    echo "<figcaption>". $comment_row['name'] ."</figcaption></figure>";

                    // Comment
                    echo '<div class="comment">';
                    echo $comment_row['comment'];
                    echo "</div>";

                    echo "<hr>";
            }

        } else {
            echo "No Comments";
        }

    ?>

</div>
</center>
<?php include('footer.php') ?>

