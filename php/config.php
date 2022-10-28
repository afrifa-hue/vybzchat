<?php
    $conn = mysqli_connect('localhost', 'root', '', 'vybzuser');
    if($conn){
        echo "" .mysqli_connect_error();
    }
?>