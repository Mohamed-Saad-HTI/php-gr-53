<?php

if(isset($_GET['submit22'])){

    $username = $_GET['username'] ;
    $password = $_GET['password'] ;

    $users = [
        ['username' => 'mohamed' , 'password' => 5050],
        ['username' => 'ahmed' , 'password' => 7895],
        ['username' => 'ahmedSayed' , 'password' => 1010],
        ['username' => 'marawan' , 'password' => 9632],
    ];
    
    $flag = 0;
    
    foreach ($users as $user) {
        if($user['username'] == $username  && $user['password'] == $password) {
            $flag = 1;
            break;
        }
    }
    
    if($flag == 1) {
        header("location:index.php?un=$username");
    } else {
        header("location:login.php?error=incorrectAccount") ;
    }

} else {
    header("location:login.php") ;
}




?>