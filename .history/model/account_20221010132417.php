<?php
function insert_account($name, $email, $password,)
{
    $sql="INSERT INTO `user`(`name`, `password`, `email`,) VALUES (,'[value-2]','[value-3]','[value-4]')";
    pdo_execute($sql);
}
?>