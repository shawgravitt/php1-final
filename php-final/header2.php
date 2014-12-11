<?php
session_start();
include('connect.php');

?>



<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Join the Party!</title>
       
</head>

<style>
	html, body {
		height: 100%;
		font-family: Copperplate, 'Copperplate Gothic Light', fantasy;
		text-align: center;
	}
	header {
		background: #7ec0ee;
	}

	footer {
		background: #1C6BA0;
		height: 75px;
		color: #fff;
		text-align: center;
		margin-top: 100px;
	}
	a {
		color: #000;
	}
	ul {
		text-align: center;
		padding: 0;
	}
	li {
		text-transform: uppercase;
		list-style: none;
		display: inline-block;
		margin: 10px;
	}
	h1 {
		text-align: center;
		color: #fff;
	}
	h1 a {
		text-decoration: none;
	}
	.logout-page {
		height: 75%;
	}
	.commentContainer {
	    border: 1px solid #000;
	    padding: 5px;
	}

	.avatar, .comment {
	    display: inline-block;
	    vertical-align: top;
	}

	.comment {
	    background-color: pink;
	    border-radius: 5px;
	    padding: 5px;
	}

	input[type="submit"] {
		margin-top: 10px;
	}

</style>


	<body>

	<header>
		<h1><a href="index.php"> Yacht Party!! </a></h1>
		<ul>
			<li><a href="users.php">Partiers</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		</ul>
	</header>