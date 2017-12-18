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

<body >





<ul >
<li><a href="index.php?page=tasks&action=create">Create Tasks</a></li>

<li><a href="index.php?page=accounts&action=all">My Account</a></li>
<li><a  href="index.php?page=accounts&action=logout">Logout</a></li>
</ul>


<h2 class="center">All Todos</h2>
<h2 style="padding-bottom: 50px;"></h2>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h3>Hii <?=$user_data->fname?>!!!</h3>
								

<?php
//this is how you print something
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>