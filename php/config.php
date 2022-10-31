<?php
    //$server = "sql206.epizy.com";
    //$username = "epiz_32873159";
    //$password = "x8PZaHMz6o";
    //$dbname = "epiz_32873159_vybzchat_db";
    
    //$conn = mysqli_connect($server, $username, $password, $dbname);
    //if($conn){
        //echo "" .mysqli_connect_error();
    //}
?>







<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'vybzuser');
    if($conn){
        echo "" .mysqli_connect_error();
    }
?>