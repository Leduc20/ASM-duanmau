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

function update_products($id_user,$pass, $email,$address,)
{
    
        $sql = "UPDATE `user` SET `id_user`='[value-1]',`name`='[value-2]',`password`='[value-3]',`email`='[value-4]',`address`='[value-5]',`phone`='[value-6]',`role`='[value-7]' WHERE 1 WHERE id_hh=".$id_hh;
    pdo_execute($sql);
}



?>