<?php
include('header.php');
session_start();

session_destroy();

// echo "All sessions are gone!";


?>


<div class='logout-page'>
	
	<h2>
		You are now logged out! Hope you enjoyed the party.
	</h2>
</div>



<?php include ('footer.php'); ?>