<?php
function insert_account($name, $email, $price, $detail, $sale,$idlh)
{
    $sql="INSERT INTO products(`name_pro`, `image`, `price`, `detail`, `sale`, `id_dm`) VALUES ('$name','$filename','$price','$detail','$sale','$idlh')";
    pdo_execute($sql);
}
?>