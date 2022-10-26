<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Vybzchat-users</title>
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                  include_once "php/config.php";
                  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                  if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                  }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img']?>" alt="">
                    <div class="details">
                        <span><?php echo $row['name']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>
                </div>
                <ul>
                <a class="logout" href="https://liveodeon.vercel.app/create">liveodeon</a>
                </ul>
            </header>
            <div class="search">
                <span class="text">Select user to vybe</span>
                <input type="text" placeholder="Enter name & signature to vybe">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>    
</body>
</html>