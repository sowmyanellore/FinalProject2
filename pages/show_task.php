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
<h1>Your Task</h1>
<h3>Title: <?php echo $data->title; ?></h3>
<h3>Task: <?php echo $data->body; ?></h3>
<h3>Due Date: <?php echo $data->duedate; ?></h3>
<h3>Difficultylevel: <?php echo $data->difficultylevel; ?></h3>

<h3>Create Date: <?php echo $data->createddate; ?></h3>
<h3>Update Date: <?php echo ($data->updateddate!='0000-00-00'?$data->updateddate:''); ?></h3>
<h3>Is Done: <?php echo ($data->isdone == '1'?'Yes':'No'); ?></h3>
</form>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
<div style="padding-left: 33.5%;"class="input">
<button ><a href="index.php?page=tasks&action=all">Back</a></button >
</div>
<script src="js/scripts.js"></script>
</body>
</html>