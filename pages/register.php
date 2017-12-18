<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>MY PROJECT</title>
    <meta name="description" content="MY PROJECT">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    <div class="input">
    <label> First name:</label> <input type="text" name="fname" placeholder="first name"required><br>
    <label>Last name: </label> <input type="text" name="lname" placeholder="lastname" required><br>
    <label>Email|Username: </label> <input type="text" name="email"  placeholder="username"required><br>
     <label>Password:</label> <input type="password" name="password"><br>
    <label>Phone: </label> <input type="text" name="phone" placeholder="phone no" required><br>
    <label>Birthday:</label> <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br>
    
     <label>Gender(M/F):</label> <input type="text" name="gender" ><br> 
   
    <input type="submit" value="Submit form">
    </div>
</form>


</body>
</html>
