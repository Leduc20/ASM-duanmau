<?php
function insert_account($name, $email, $password,)
{
    $sql="INSERT INTO `user`(`id_user`, `name`, `password`, `email`, `address`, `phone`, `role`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
    pdo_execute($sql);
}
?>