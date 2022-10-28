<?php
     //DEVELOPMENT MODE
    //$host = '127.0.0.1';
    //$db = 'vybzuser';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';
    
    //PRODUCTION MODE
    $host = 'sql5.freemysqlhosting.net';
    $db = '	sql5529828';
    $user = 'sql5529828';
    $pass = 'W74BmwLEzp';
    $charset = 'utf8mb4';

    $conn = mysqli_connect($host, $db, $user, $pass, $charset);
    if($conn){
        echo "" .mysqli_connect_error();
    }
?>