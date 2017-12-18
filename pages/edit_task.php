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

<ul>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
  <div class ="input"  >
  
<h1 class="center">Edit Todos</h1>
<h2 style="padding-bottom: 50px;"></h2>
<label>	Title: </label> <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
	<label>Task: </label> <textarea  name="body" id="body" required><?php echo $data->body; ?></textarea><br>
   <label>Difficulty level: </label> <textarea name="difficultylevel" id="difficultylevel" required><?php echo $data->difficultylevel; ?></textarea><br>
   <label>Due date: </label> <input type="duedate" name="duedate" id="duedate" value="<?php echo $data->duedate; ?>" required><br>
	<label>Is Done: </label><input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
    <input type="submit" value="Submit form">
    </div>
</form>
<div style="padding-left: 33.5%;"class="input">
<button ><a href="index.php?page=tasks&action=all">Back</a></button >
</button >
<script src="js/scripts.js"></script>
</body>
</html>