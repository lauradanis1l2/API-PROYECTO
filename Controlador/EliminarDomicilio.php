<?php
require_once('../Modelo/Domicilios.php');
if($_POST){
    $ModeloDomicilio=new Domicilio();
    $idDomicilio=$_POST["idDomicilio"];
    $ModeloDomicilio->Eliminar($idDomicilio);
}
else{
    header('Location:../Vista/Domicilios.php');
}
?>