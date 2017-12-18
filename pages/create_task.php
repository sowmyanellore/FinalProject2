<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>MY FINALPROJECT</title>
    <meta name="description" content="MY FINALPROJECT">
    <meta name="author" content="SitePoint">

     <link rel="stylesheet" type="text/css" href="style.css">


    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>


								
<ul >
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>


<form action="index.php?page=tasks&action=save" method="post">
<div class="input">
<h1 class="center">Add Todos</h1>
<h2 style="padding-bottom: 50px;"></h2>
	<label>Title:</label> <input type="text" name="title" id="title" required><br>
	<label>Task: </label><textarea name="body" id="body" required></textarea><br>
  <label>Difficulty Level: </label><textarea name="difficultylevel" id="difficultylevel" required></textarea><br>
  <label>Duedate: </label><textarea name="duedate" id="duedate" required></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1"><br>
    <input  type="submit" value="Submit form">
   
</div>
</form>
<div style="padding-left: 33.5%;"class="input">
<button ><a  href="index.php?page=tasks&action=all">Back</a></button>
<script src="js/scripts.js"></script>
</div>
</body>
</html>