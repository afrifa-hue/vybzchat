
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
    <title>Vybzchat-register</title>
</head>
<body>
    <div class="wrapper">
        <section class="form register">
            <header>JOIN NOW</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="field input">
                        <label>Signature</label>
                        <input type="text" name="signature" placeholder="Enter a signature" required>
                    </div>
                </div>    
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="JOIN VYBZCHAT">
                    </div>
               
            </form>
            <div class="link">Alredy having an account?<a href="login.php">Login now</a></div>
        </section>
    </div> 
    <script src="javascript/sign.js"></script> 
</body>
</html>