<?php
function insert_account($id_user, $name, $price, $detail, $sale,$idlh)
{
    $sql="INSERT INTO products(`name_pro`, `image`, `price`, `detail`, `sale`, `id_dm`) VALUES ('$name','$filename','$price','$detail','$sale','$idlh')";
    pdo_execute($sql);
}
?>