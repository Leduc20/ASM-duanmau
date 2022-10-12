<?php
function insert_account($name, $email, $password,)
{
    $sql="INSERT INTO `user`(`name`, `password`, `email`,) VALUES (,'$name','','[value-4]')";
    pdo_execute($sql);
}
?>