<?php
    // if(isset($_COOKIE['user_name'])){
    //     $user_name = $_COOKIE['user_name'];
    //     echo $user_name;
    // }
    require ("./bt6_Cookie.php");
    $user_name = isset($_COOKIE['user_name'])?$_COOKIE['user_name']:'';
    echo $user_name;
    
?>