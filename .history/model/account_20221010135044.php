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



?>