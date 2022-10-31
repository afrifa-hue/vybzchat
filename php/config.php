<?php
    $server = "sql5.freesqldatabase.com";
    $username = "sql5531003";
    $password = "hLzMcaq3MG";
    $dbname = "sql5531003";
    
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if($conn){
        echo "" .mysqli_connect_error();
    }
?>







<?php
    
    //$conn = mysqli_connect('localhost', 'root', '', 'vybzuser');
    //if($conn){
        //echo "" .mysqli_connect_error();
    //}
?>