<?php
    $connect = mysqli_connect('localhost', 'root', '', 'php1fpt');
    if($connect){
        mysqli_query($connect, 'SET NAME "UTF8"');
        
    }
    else{
        echo"ket noi that bai";
    }
?>