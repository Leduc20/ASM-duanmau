<?php
function insert_account($name, $email, $password,)
{
    $sql="INSERT INTO `user`(`name`, `password`, `email`,) VALUES (,'[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
    pdo_execute($sql);
}
?>