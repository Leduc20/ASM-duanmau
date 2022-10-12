<?php
function insert_account($name, $email, $password)
{
    $sql="INSERT INTO `user`(`name`, `password`, `email`,) VALUES (,'$name','$password','$email')";
    pdo_execute($sql);
}
?>