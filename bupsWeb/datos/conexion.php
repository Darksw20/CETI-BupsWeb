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
            $cn = new PDO("mysql:host=localhost:1234; dbname=prueba", "root","");
            return $cn;
        } catch (PDOException $ex)
         {
            die($ex->getMessage());
        }
    }

}