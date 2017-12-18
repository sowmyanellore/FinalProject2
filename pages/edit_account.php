<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
<div class="input"  >
            <h1 >Edit Account</h1>
            
    <label>First name:</label> <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    <label>Last name:</label> <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    <label>Email:</label> <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    <label>Phone:</label> <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    <label>Birthday:</label> <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    <label>Gender:</label> <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
    </div>
</form>
<div style="padding-left: 33.5%;"class="input">
<a href="index.php?page=accounts&action=all"><button type="button">Back</button></a>
</div>
<script src="js/scripts.js"></script>
</body>
</html>