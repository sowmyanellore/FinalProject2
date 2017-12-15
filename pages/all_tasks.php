<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>All Todos</h2>


<ul>
<li><a href="index.php?page=accounts&action=all">Go Back To My Account</a>
</li>

<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

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