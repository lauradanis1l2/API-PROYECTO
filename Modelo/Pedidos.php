<?php
require_once('Conexion.php');
class Pedido{
    private $pdo;//VARIABLE PARA CONEXION 
    public $idPedido;
    public $fechaPedido;
    public $horaPedido;
    public $totalPedido;
    public $estadoPedido;
    public $idUsuarioFK;

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
    $stm=$this->pdo->prepare("Select * from pedido");
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
}
public function Agregar($idPedido, $fechaPedido, $horaPedido, $totalPedido, $estadoPedido, $idUsuarioFK)
{
    $stm = $this->pdo->prepare("INSERT INTO pedido (idPedido, fechaPedido, horaPedido, totalPedido, estadoPedido, idUsuarioFK)
    VALUES (:idPedido, :fechaPedido, :horaPedido, :totalPedido, :estadoPedido, :idUsuarioFK)");

    $stm->bindParam(':idPedido', $idPedido);
    $stm->bindParam(':fechaPedido', $fechaPedido);
    $stm->bindParam(':horaPedido', $horaPedido);
    $stm->bindParam(':totalPedido', $totalPedido);
    $stm->bindParam(':estadoPedido', $estadoPedido);
    $stm->bindParam(':idUsuarioFK', $idUsuarioFK);

    if ($stm->execute()) {
        header('Location:../Vista/Pedidos.php');
    } else {
        header('Location:../Vista/AgregarPedido.php');
    }
}


         
//METODO PARA OBTENER EL ID DE UN USUARIO
public function Obtener ($idPedido){
    $rows=null;
    $stm=$this->pdo->prepare("SELECT * FROM pedido where idPedido =:idPedido");
    $stm->bindParam(':idPedido',$idPedido);
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
} 

//METODO PARA ACTUALIZAR USUARIO
public function Actualizar($idPedido,$fechaPedido,$horaPedido,$totalPedido,$estadoPedido,$idUsuarioFK){
    $stm=$this->pdo->prepare("UPDATE PEDIDO
    SET idPedido=:idPedido,
    fechaPedido=:fechaPedido,
    horaPedido=:horaPedido,
    totalPedido=:totalPedido,
    estadoPedido=:estadoPedido,
    idUsuarioFK=:idUsuarioFK
    WHERE idPedido=:idPedido");
    $stm->bindParam(':idPedido', $idPedido);
    $stm->bindParam(':fechaPedido', $fechaPedido);
    $stm->bindParam(':horaPedido', $horaPedido);
    $stm->bindParam(':totalPedido', $totalPedido);
    $stm->bindParam(':estadoPedido', $estadoPedido);
    $stm->bindParam(':idUsuarioFK', $idUsuarioFK);

    if($stm->execute()){
    header('Location:../Vista/Pedidos.php');
    }else{
    header('Location:../Vista/EditarPedido.php');
    }
}
//METODO PARA ELIMINAR UN USUARIO
public function Eliminar($idPedido){
    $stm=$this->pdo->prepare("DELETE FROM pedido WHERE idPedido=:idPedido");
    $stm->bindParam(':idPedido',$idPedido);
    if($stm->execute()){
        header('Location:../Vista/Pedidos.php');
    }else{
    header('Location:../Vista/EliminarPedido.php');
    }
}

}
?>