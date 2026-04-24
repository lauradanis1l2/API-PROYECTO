<?php
require_once('Conexion.php');

class Domicilio {
    private $pdo;

    public $idDomicilio;
    public $horaDomicilio;
    public $estadoDomicilio;
    public $idPedidoFK;
    public $idUsuarioFK; // 🔥 CAMBIADO

    public function __CONSTRUCT() {
        try {
            $this->pdo = Conexion::StartUp();
        } catch(Exception $e) {
            echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }

    public function Listar() {
        $rows = null;
        $stm = $this->pdo->prepare("SELECT * FROM domicilio");
        $stm->execute();
        while($result = $stm->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    // 🔥 AGREGAR (SIN idDomicilio porque es AUTO_INCREMENT)
    public function Agregar($horaDomicilio, $estadoDomicilio, $idPedidoFK, $idUsuarioFK) {
        $stm = $this->pdo->prepare("INSERT INTO domicilio 
        (horaDomicilio, estadoDomicilio, idPedidoFK, idUsuarioFK)
        VALUES (:horaDomicilio, :estadoDomicilio, :idPedidoFK, :idUsuarioFK)");

        $stm->bindParam(':horaDomicilio', $horaDomicilio);
        $stm->bindParam(':estadoDomicilio', $estadoDomicilio);
        $stm->bindParam(':idPedidoFK', $idPedidoFK);
        $stm->bindParam(':idUsuarioFK', $idUsuarioFK);

        if ($stm->execute()) {
            header('Location:../Vista/Domicilios.php');
        } else {
            header('Location:../Vista/AgregarDomicilio.php');
        }
    }

    // OBTENER
    public function Obtener($idDomicilio) {
        $rows = null;
        $stm = $this->pdo->prepare("SELECT * FROM domicilio WHERE idDomicilio = :idDomicilio");
        $stm->bindParam(':idDomicilio', $idDomicilio);
        $stm->execute();
        while($result = $stm->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    // 🔥 ACTUALIZAR CORREGIDO
    public function Actualizar($idDomicilio, $horaDomicilio, $estadoDomicilio, $idPedidoFK, $idUsuarioFK) {
        $stm = $this->pdo->prepare("UPDATE domicilio
        SET horaDomicilio = :horaDomicilio,
            estadoDomicilio = :estadoDomicilio,
            idPedidoFK = :idPedidoFK,
            idUsuarioFK = :idUsuarioFK
        WHERE idDomicilio = :idDomicilio");

        $stm->bindParam(':idDomicilio', $idDomicilio);
        $stm->bindParam(':horaDomicilio', $horaDomicilio);
        $stm->bindParam(':estadoDomicilio', $estadoDomicilio);
        $stm->bindParam(':idPedidoFK', $idPedidoFK);
        $stm->bindParam(':idUsuarioFK', $idUsuarioFK);

        if($stm->execute()){
            header('Location:../Vista/Domicilios.php');
        } else {
            header('Location:../Vista/EditarDomicilio.php');
        }
    }

    // ELIMINAR
    public function Eliminar($idDomicilio) {
        $stm = $this->pdo->prepare("DELETE FROM domicilio WHERE idDomicilio = :idDomicilio");
        $stm->bindParam(':idDomicilio', $idDomicilio);

        if($stm->execute()){
            header('Location:../Vista/Domicilios.php');
        } else {
            header('Location:../Vista/EliminarDomicilio.php');
        }
    }
}
?>