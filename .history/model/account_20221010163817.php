<?php
function insert_account($user, $email, $password)
{
    $sql="INSERT INTO user(name,password,email) VALUES ('$user','$password','$email')";
    pdo_execute($sql);
}
function check_user($user,$pass)
{
    $sql = "SELECT * FROM `user` WHERE name='".$user."' AND password='".$pass."'";
    $check = pdo_query_one($sql);
    return $check;
}

function update_taikhoan($id_user,$user,$pass, $email,$address,$phone)
{
    
    $sql = "UPDATE user SET name_pro='".$na."',price='".$price."',detail='".$detail."',sale='".$sale."',id_dm='".$idlh."' WHERE id_user=".$id_user;
    pdo_execute($sql);
}



?>