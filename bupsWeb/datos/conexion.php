<?php


class conexion
{
    /**
     * conexion a la base de datos
     * @return PDO
     */

    public static function conectar()
    {
        try 
        {
            $cn = new PDO("mysql:host=localhost; dbname=bups1.0", "root","");
            return $cn;
        } catch (PDOException $ex)
         {
            die($ex->getMessage());
        }
    }

}