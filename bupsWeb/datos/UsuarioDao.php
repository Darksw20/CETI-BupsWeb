<?php 
include 'conexion.php';
include '../entidades/usuario.php';
//include '../controlador/usuarioControlador.php';
class usuarioDao extends conexion
 
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve pra validar el login
     *
     * @param       [object]        $CUM
     * @return      boolean
     */

    public static function login($obj_usuario)
    {
        $query = "SELECT  * FROM usuario WHERE CUM = :CUM AND Password = :Password";

        self::getConexion();
        
        $resultado = self::$cnx->prepare($query);
        $x=$obj_usuario->getCUM();
        $y=$obj_usuario->getPassword();
        $resultado->bindParam(":CUM", $x);
        $resultado->bindParam(":Password", $y);
        
        $resultado->execute();

        if($resultado->rowCount() > 0)
        {
            $filas = $resultado->fetch();
            if($filas["CUM"]==$x && $filas["Password"] == $y){
            {
                return true;
            }
        }
        return false;

        }


    }
}   