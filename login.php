<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Vybzchat-login</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login" >
            <header>LOGIN NOW</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div> 
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="text" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="LOGIN TO VYBZCHAT">
                    </div>
               
            </form>
            <div class="link">Don't have an account?<a href="sign.php">Register now</a></div>
        </section>
    </div>
    <script src="javascript/login.js"></script>    
</body>
</html>