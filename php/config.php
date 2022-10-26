<?php
    $conn = mysqli_connect('localhost', 'root', '', 'vybzuser_db');
    if($conn){
        echo "" .mysqli_connect_error();
    }
?>