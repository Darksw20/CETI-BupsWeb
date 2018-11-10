<?php 
include '../datos/UsuarioDao.php';
class usuarioControlador
{
    public static function login($CUM,$Password)
    {
        $obj_usuario = new usuario();
        $obj_usuario->setCUM($CUM);
        $obj_usuario->setPassword($Password);
        
        return UsuarioDao::login($obj_usuario);
        
    }
}