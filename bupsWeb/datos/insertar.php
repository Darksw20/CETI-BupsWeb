<?php

class insertar{
    public $Nombre;
    public $CUM;
    public $A_Pat;
    public $A_Mat;
    public $Sexo;
    public $F_Nac;
    public $Vigencia;
    public $Provincia;
    public $Grupo_S;
    public $Seccion;
    public $Scouter_Responsable;
    public $Tel_Cel;
    public $Password;
    public $Estatura;
    public $Peso;
    public $Color_Cabello;
    public $Color_Ojos;
    public $Color_Piel;
    public $Tipo_Sangre;
    public $Donar_Sangre;
    public $Dieta;
    public $Alcohol;
    public $Fumador;
    public $Uso_Sustancias;
    public $Fam_Diabetes;
    public $Fam_Hipertension;
    public $Afecciones_Frio_Calor;
    public $Fk_Info_Emergencia;
    public $Fk_Regnal;
    public $Tipo_Usuario;
    public $Nomb_Cont_Emerg;
    public $Dir_Cont_Emerg;
    public $Tel_Cont_Emerg;
    public function insert(){


        $model = new Conexion();
        $conexion = $model->conectar();
        //---------------------Incersion en la tabla de contacto de emergencia-------------------------
        $sqlDeEmergencia = "INSERT INTO informacion_emergencia (";
	    $sqlDeEmergencia .= "Nomb_Cont_Emerg, Dir_Cont_Emerg, Tel_Cont_Emerg";
	    $sqlDeEmergencia .= ") VALUES (";
	    $sqlDeEmergencia .= ":contactoemergencia, :diremergencia, :telefonoemergencia)";
        $consultaEmergencia = $conexion->prepare($sqlDeEmergencia);
        $consultaEmergencia->bindParam(':contactoemergencia', $this->Nomb_Cont_Emerg);
        $consultaEmergencia->bindParam(':diremergencia', $this->Dir_Cont_Emerg);
        $consultaEmergencia->bindParam(':telefonoemergencia', $this->Tel_Cont_Emerg);
        $consultaEmergencia->execute();
        //--------------------------Seleccionar el ID de informacion de emergencia-----------------------
        $sqlSeleccionContacto =
            "SELECT Pk_Inf_Emergencia FROM informacion_emergencia  WHERE Nomb_Cont_Emerg ='".$this->Nomb_Cont_Emerg."' ";
        $consultaContacto = $conexion->prepare($sqlSeleccionContacto);
        $consultaContacto->execute();
        $resultado = $consultaContacto->fetch(PDO::FETCH_COLUMN,0); //En resultado se almacena el ID de contacto de emergencia
        var_dump($resultado);
        //-------------------------Seleccionar el cum de regnal------------------------------------------
        $sqlSeleccionRegnal =
        "SELECT CUM FROM regnal  WHERE CUM ='".$this->CUM."' ";
    $consultaRegnal = $conexion->prepare($sqlSeleccionRegnal);
    $consultaRegnal->execute();
    $resultado2 = $consultaRegnal->fetch(PDO::FETCH_ASSOC); //En resultado2 se almacena el CUM de regnal

            echo "hola";
        var_dump($resultado2["CUM"]);
        echo "hola despues";
        $sql = 
        "INSERT INTO usuario 
            (
                CUM, 
                Nombre, 
                A_Pat, 
                A_Mat, 
                Sexo, 
                F_Naci, 
                Vigencia, 
                Provincia, 
                Grupo_S, 
                Seccion, 
                Scouter_Responsable,
                Tel_Cel, 
                Password, 
                Estatura, 
                Peso, 
                Color_Cabello, 
                Color_Ojos, 
                Color_Piel, 
                Tipo_Sangre, 
                Donar_Sangre, 
                Dieta, 
                Alcohol,
                Fumador, 
                Uso_Sustancias,
                Fam_Diabetes, 
                Fam_Hipertension, 
                Afecciones_Frio_Calor, 
                Fk_Info_Emergencia, 
                Fk_Regnal, 
                Tipo_Usuario
            )
        VALUES 
            (
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
            )
        ";
$consulta = $conexion->prepare($sql);
if (!$consulta /*|| $consultaEmergencia*/)  
{
    $this->mensaje = $mensaje = $conexion->errorInfo();
}else {
/*Datos que pasaremos en el execute*/   
$arrParams = array 
        (
            $this->CUM,
            $this->Nombre,
            $this->A_Pat,
            $this->A_Mat,
            $this->Sexo,
            $this->F_Nac,
            $this->Vigencia,
            $this->Provincia,
            $this->Grupo_S,
            $this->Seccion,
            $this->Scouter_Responsable,
            $this->Tel_Cel,
            $this->Password,
            $this->Estatura,
            $this->Peso,
            $this->Color_Cabello,
            $this->Color_Ojos,
            $this->Color_Piel,
            $this->Tipo_Sangre,
            $this->Donar_Sangre,
            $this->Dieta,
            $this->Alcohol,
            $this->Fumador,
            $this->Uso_Sustancias,
            $this->Fam_Diabetes,
            $this->Fam_Hipertension,
            $this->Afecciones_Frio_Calor,
            $resultado,
            $resultado2["CUM"],
            $this->Tipo_Usuario
        );
        var_dump($arrParams);
    $consulta->execute($arrParams);
    //var_dump($consulta);
    $this->mensaje = "Se hizo el insert"; //deberías verificar con affected_rows
        }   

    }

}