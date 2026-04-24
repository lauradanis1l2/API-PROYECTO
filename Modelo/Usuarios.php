<?php
require_once('Conexion.php');
class Usuario{
    private $pdo;//VARIABLE PARA CONEXION 
    public $idUsuario;
    public $tipoDocUsuario;
    public $numdocUsuario;
    public $nombreUsuario;
    public $apellidoUsuario;
    public $direccionUsuario;
    public $telefonoUsuario;
    public $correoUsuario;
    public $passwordUsuario;
    public $estadoUsuario;
    public $id_RolUsuario_fk;

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
    $stm=$this->pdo->prepare("Select * from usuario");
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
}
public function Agregar($idUsuario,$tipoDocUsuario, $numdocUsuario, $nombreUsuario, $apellidoUsuario, $direccionUsuario, $telefonoUsuario, $correoUsuario, $passwordUsuario, $estadoUsuario, $id_RolUsuario_fk) {
    $stm = $this->pdo->prepare("INSERT INTO usuario (idUsuario, tipoDocUsuario, numdocUsuario, nombreUsuario, apellidoUsuario, direccionUsuario, telefonoUsuario, correoUsuario, passwordUsuario, estadoUsuario, id_RolUsuario_fk)
    VALUES (:idUsuario, :tipoDocUsuario, :numdocUsuario, :nombreUsuario, :apellidoUsuario, :direccionUsuario, :telefonoUsuario, :correoUsuario, :passwordUsuario, :estadoUsuario, :id_RolUsuario_fk)");

    $stm->bindParam(':idUsuario', $idUsuario);
    $stm->bindParam(':tipoDocUsuario', $tipoDocUsuario);
    $stm->bindParam(':numdocUsuario', $numdocUsuario);
    $stm->bindParam(':nombreUsuario', $nombreUsuario);
    $stm->bindParam(':apellidoUsuario', $apellidoUsuario);
    $stm->bindParam(':direccionUsuario', $direccionUsuario);
    $stm->bindParam(':telefonoUsuario', $telefonoUsuario);
    $stm->bindParam(':correoUsuario', $correoUsuario);
    $stm->bindParam(':passwordUsuario', $passwordUsuario);
    $stm->bindParam(':estadoUsuario', $estadoUsuario);
    $stm->bindParam(':id_RolUsuario_fk', $id_RolUsuario_fk); 
    
    if ($stm->execute()) {
        header('Location:../Vista/Usuarios.php');
    } else {
        header('Location:../Vista/AgregarUsuario.php');
    }
}

public function AgregarUsuarioExterno($tipoDocUsuario, $numdocUsuario, $nombreUsuario, $apellidoUsuario, $direccionUsuario, $telefonoUsuario, $correoUsuario, $passwordUsuario, $estadoUsuario, $id_RolUsuario_fk) {
    $stm = $this->pdo->prepare("INSERT INTO usuario (tipoDocUsuario, numdocUsuario, nombreUsuario, apellidoUsuario, direccionUsuario, telefonoUsuario, correoUsuario, passwordUsuario, estadoUsuario, id_RolUsuario_fk)
    VALUES (:tipoDocUsuario, :numdocUsuario, :nombreUsuario, :apellidoUsuario, :direccionUsuario, :telefonoUsuario, :correoUsuario, :passwordUsuario, :estadoUsuario, :id_RolUsuario_fk)");

    $stm->bindParam(':tipoDocUsuario', $tipoDocUsuario);
    $stm->bindParam(':numdocUsuario', $numdocUsuario);
    $stm->bindParam(':nombreUsuario', $nombreUsuario);
    $stm->bindParam(':apellidoUsuario', $apellidoUsuario);
    $stm->bindParam(':direccionUsuario', $direccionUsuario);
    $stm->bindParam(':telefonoUsuario', $telefonoUsuario);
    $stm->bindParam(':correoUsuario', $correoUsuario);
    $stm->bindParam(':passwordUsuario', $passwordUsuario);
    $stm->bindParam(':estadoUsuario', $estadoUsuario);
    $stm->bindParam(':id_RolUsuario_fk', $id_RolUsuario_fk);

        if ($stm->execute()) {
        header('Location:../Vista/iniciarse.php');
    } else {
        header('Location:../Vista/index.php');
    }
}


//METODO PARA ACTUALIZAR USUARIO
public function Actualizar($tipoDocUsuario,$numdocUsuario,$nombreUsuario,$apellidoUsuario,$direccionUsuario,$telefonoUsuario, $correoUsuario,$passwordUsuario,$estadoUsuario,$id_RolUsuario_fk,$idUsuario){
    $stm=$this->pdo->prepare("UPDATE USUARIO
    SET tipoDocUsuario=:tipoDocUsuario,
    numdocUsuario=:numdocUsuario,
    nombreUsuario=:nombreUsuario,
    apellidoUsuario=:apellidoUsuario,
    direccionUsuario=:direccionUsuario,
    telefonoUsuario=:telefonoUsuario,
    correoUsuario=:correoUsuario,
    passwordUsuario=:passwordUsuario,
    estadoUsuario=:estadoUsuario,
    id_RolUsuario_fk=:id_RolUsuario_fk
    WHERE idUsuario=:idUsuario");
    $stm->bindParam(':tipoDocUsuario',$tipoDocUsuario);
    $stm->bindParam(':numdocUsuario',$numdocUsuario);
    $stm->bindParam(':nombreUsuario',$nombreUsuario);
    $stm->bindParam(':apellidoUsuario',$apellidoUsuario);
    $stm->bindParam(':direccionUsuario',$direccionUsuario);
    $stm->bindParam(':telefonoUsuario',$telefonoUsuario);
    $stm->bindParam(':correoUsuario',$correoUsuario);
    $stm->bindParam(':passwordUsuario',$passwordUsuario);
    $stm->bindParam(':estadoUsuario',$estadoUsuario);
    $stm->bindParam(':id_RolUsuario_fk',$id_RolUsuario_fk);
    $stm->bindParam(':idUsuario',$idUsuario);
    if($stm->execute()){
    header('Location:../Vista/Usuarios.php');
    }else{
    header('Location:../Vista/EditarUsuario.php');
    }
}
//METODO PARA ELIMINAR UN USUARIO
public function Eliminar($idUsuario){
    $stm=$this->pdo->prepare("DELETE FROM usuario WHERE idUsuario=:idUsuario");
    $stm->bindParam(':idUsuario',$idUsuario);
    if($stm->execute()){
        header('Location:../Vista/Usuarios.php');
    }else{
    header('Location:../Vista/EliminarUsuario.php');
    }
}

public function Obtener($idUsuario) {
    $rows = null;
    $stm = $this->pdo->prepare("call pa_consultarusuariosporid(:idUsuario)");
    $stm->bindParam(':idUsuario', $idUsuario);
    $stm->execute();
    while ($result = $stm->fetch()) {
        $rows[] = $result;
    }
    return $rows;
}
}
?>
