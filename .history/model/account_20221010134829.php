<?php
function insert_account($user, $email, $password)
{
    $sql="INSERT INTO user(name,password,email) VALUES ('$user','$password','$email')";
    pdo_execute($sql);
}
function check_user($)
{
    $sql = "SELECT * FROM `products` WHERE id_hh =".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}



?>