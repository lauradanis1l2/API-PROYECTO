 <?php
session_start();//SE INICIA SESION PARA EL MANEJO DE USUARIOS
require_once('Conexion.php');
class Login {
    private $pdo;//VARIABLE PARA CONEXION
    //CONSTRUCTOR
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::StartUp(); //SE CONECTA CON LA BASE DE DATOS A TRAVES DE LA FUNCION STARTUP        
        }
        catch(Exception $e)
        {    echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }  
}
//ESTA FUNCION CONSULTS EN LA TABLA USUARIO PASANDFO COMO PARAMERTROS EL USUARIO Y LA CONTRASEÑA
public function login($Usuario, $Password){
    $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE correoUsuario = :UserU AND passwordUsuario = :PasswordU");
    $stm->bindParam(':UserU', $Usuario);
    $stm->bindParam(':PasswordU', $Password);
    $stm->execute();
    if ($stm->rowCount() == 1) {
        $result = $stm->fetch();

        //SE INICIA LA VARIABLE $_SESSION PARA TOMAR DATOS DE LA BASE EN EL ARREGLO RESULT
              $_SESSION['nombreUsuario'] = $result["nombreUsuario"];
        $_SESSION['id'] = $result['idUsuario'];
;

        //DEVUELVE EL ID PARA SABER SI ENCONTRO AL USUARIO
        return $result['idUsuario'];
    }
    //DE LO CONTRARIO DEVUELVE FALSO
return false;
}
public function validateSession(){
    if($_SESSION['idUsuario']=null){
        header('Location:../vista/Login.php');    
    }
}  

//FUNCION PARA DEVOLVER EL ID DE LA SESIÓN ACTIVA
public function GetIdUsuario(){
    return $_SESSION["idUsuario"] ?? null;
}
}
?>