<?php
    session_start();
    include_once "config.php";
 
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql =  mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%{$searchTerm}%' OR signature LIKE '%{$searchTerm}%'");
   
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>' . $row['name'] .'</span>
                        
                    </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>'; 
        }
    }else{
        $output .= "No user found related to your search term";
    }
    echo $output;
?>