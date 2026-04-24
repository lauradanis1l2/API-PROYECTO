<?php
require_once('Conexion.php');
class Producto{
    private $pdo;//VARIABLE PARA CONEXION 
    public $idProducto;
    public $descripProducto;
    public $precioProducto;
    public $categoriaProducto;
    public $estadoProducto;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::StartUp(); // SE CONECTA CON L BASE DE DATOS A
            //TRAVES DE LA FUNCION STARTUP
        }
        catch(Exception $e)
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }

public function Listar(){
    $rows=null;
    $stm=$this->pdo->prepare("Select * from producto");
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
}
public function Agregar($idProducto, $descripProducto, $precioProducto, $categoriaProducto, $estadoProducto)
{
    $stm = $this->pdo->prepare("INSERT INTO producto (idProducto, descripProducto, precioProducto, categoriaProducto, estadoProducto)
    VALUES (:idProducto, :descripProducto, :precioProducto, :categoriaProducto, :estadoProducto)");

    $stm->bindParam(':idProducto', $idProducto);
    $stm->bindParam(':descripProducto', $descripProducto);
    $stm->bindParam(':precioProducto', $precioProducto);
    $stm->bindParam(':categoriaProducto', $categoriaProducto);
    $stm->bindParam(':estadoProducto', $estadoProducto);

    if ($stm->execute()) {
        header('Location:../Vista/Productos.php');
    } else {
        header('Location:../Vista/AgregarProducto.php');
    }
}


         
//METODO PARA OBTENER EL ID DE UN USUARIO
public function Obtener ($idProducto){
    $rows=null;
    $stm=$this->pdo->prepare("SELECT * FROM producto where idProducto =:idProducto");
    $stm->bindParam(':idProducto',$idProducto);
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
} 

//METODO PARA ACTUALIZAR USUARIO
public function Actualizar($idProducto,$descripProducto,$precioProducto,$categoriaProducto,$estadoProducto){
    $stm=$this->pdo->prepare("UPDATE PRODUCTO
    SET idProducto=:idProducto,
    descripProducto=:descripProducto,
    precioProducto=:precioProducto,
    categoriaProducto=:categoriaProducto,
    estadoProducto=:estadoProducto
    WHERE idProducto=:idProducto");
    $stm->bindParam(':idProducto', $idProducto);
    $stm->bindParam(':descripProducto', $descripProducto);
    $stm->bindParam(':precioProducto', $precioProducto);
    $stm->bindParam(':categoriaProducto', $categoriaProducto);
    $stm->bindParam(':estadoProducto', $estadoProducto);
    if($stm->execute()){
    header('Location:../Vista/Productos.php');
    }else{
    header('Location:../Vista/EditarProducto.php');
    }
}
//METODO PARA ELIMINAR UN USUARIO
public function Eliminar($idProducto){
    $stm=$this->pdo->prepare("DELETE FROM producto WHERE idProducto=:idProducto");
    $stm->bindParam(':idProducto',$idProducto);
    if($stm->execute()){
        header('Location:../Vista/Productos.php');
    }else{
    header('Location:../Vista/EliminarProducto.php');
    }
}

}
?>