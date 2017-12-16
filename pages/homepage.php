<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>MY FINALPROJECT</title>
    <meta name="description" content="MY FINALPROJECT">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>


<body>

   <h1 class="header">Welcome to my application</h1>
   
   <form action="index.php?page=accounts&action=login" method="POST">

       <div class="input">
           <label><b>Username</b></label>
           <input type="text" placeholder="Enter Username" name="email" required>
       
           <label><b>Password</b></label>
           <input type="password" placeholder="Enter Password" name="password" required>
   
           <button type="submit"><b>LOGIN</b></button>
       </div>

   </form>

   <p class="links"> Dont have account? <a href="index.php?page=accounts&action=register">Register</a></p>

</body>
</html>