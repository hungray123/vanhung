<?php

function validateUsers($user){
    $errors=array();
    
    if(empty($user['email'])){
        array_push($errors ,'email is required');

    }
    if(empty($user['username'])){
      array_push($errors ,'Username is required');

  }
    if(empty($user['password'])){
        array_push($errors ,'Pass is required');

    }
    if($user['pswd']!==$user['password']){
        array_push($errors ,'password do not match');

    }
    $existingUser=selectOne('user',['email'=>$user['email']]);
    if(isset($existingUser)){
        array_push($errors,'Email da ton tai.Xin nhap Email khac');
    }
    return $errors;
}


function validateLogin($user){
    $errors=array();
    
    
    if(empty($user['username'])){
      array_push($errors ,'Username is required');

  }
    if(empty($user['password'])){
        array_push($errors ,'Pass is required');

    }
    
    return $errors;
}