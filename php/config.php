<?php
    //$serverName = 'sql12.freesqldatabase.com';
    //$userName = 'sql12534715';
    //$password = '9tBxWzquPb';
    //$dbname ='sql12534715';
    
    //$conn = mysqli_connect($severName, $userName, $password, $dbname);
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