<?php
function insert_account($user, $email, $password)
{
    $sql="INSERT INTO user(name,password,email) VALUES ('$user','$password','$email')";
    pdo_execute($sql);
}



?>