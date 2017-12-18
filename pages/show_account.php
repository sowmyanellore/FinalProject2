<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>MY PROJECT</title>
    <meta name="description" content="MY PROJECT">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<ul>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<form>
<h1>Show Account</h1>

<h3>Email: <?php echo $data->email; ?></h3>
<h3>First Name: <?php echo $data->fname; ?></h3>
<h3>Last Name: <?php echo $data->lname; ?></h3>
<h3>Phone: <?php echo $data->phone; ?></h3>
<h3>Birthday: <?php echo $data->birthday; ?></h3>
<h3>Gender: <?php echo $data->gender; ?></h3>
</form>
<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" onClick="return confirm('Are you sure you want to delete this account.');">Delete</button>
</form>
<div style="padding-left: 33.5%;"class="input">
<a href="index.php?page=accounts&action=all"><button type="button">Back</button></a>
</div>
<script src="js/scripts.js"></script>
</body>
</html>