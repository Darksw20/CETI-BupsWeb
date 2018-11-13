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


        $sqlDeEmergencia = "INSERT INTO informacion_emergencia (";
	    $sqlDeEmergencia .= "Nomb_Cont_Emerg, Dir_Cont_Emerg, Tel_Cont_Emerg";
	    $sqlDeEmergencia .= ") VALUES (";
	    $sqlDeEmergencia .= ":contactoemergencia, :diremergencia, :telefonoemergencia)";
        $consultaEmergencia = $conexion->prepare($sqlDeEmergencia);
        $consultaEmergencia->bindParam(':contactoemergencia', $this->Nomb_Cont_Emerg);
        $consultaEmergencia->bindParam(':diremergencia', $this->Dir_Cont_Emerg);
        $consultaEmergencia->bindParam(':telefonoemergencia', $this->Tel_Cont_Emerg);


        $sql = "INSERT INTO usuario (";
	    $sql .= "CUM, Nombre, A_Pat, A_Mat, Sexo, F_Naci, Vigencia, Provincia, Grupo_S, Seccion, Scouter_Responsable, Tel_Cel, Password, Estatura, Peso, Color_Cabello, Color_Ojos, Color_Piel, Tipo_Sangre, Donar_Sangre, Dieta, Alcohol, Fumador, Uso_Sustancias, Fam_Diabetes, Fam_Hipertension, Afecciones_Frio_Calor, Fk_Info_Emergencia, Fk_Regnal, Tipo_Usuario";
	    $sql .= ") VALUES (";
	    $sql .= ":cum, :nombre, :ap_pa, :ap_ma, :sexo,:fechadenacimiento,:vigenciascout,:provincia,:grupo,:seccion,:scouterR,:celular,:passuser,:estatura,:peso,:color-cabello,:color-ojos,:color-piel,:tiposangre,:donarsangre,:dieta,:bebealcohol,:fuma,:suatanciasrecreativas,:familiadiabetes,:familiahipertension,:afecciones,'1',:cum,:tipouser)";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':cum', $this->CUM);
        $consulta->bindParam(':nombre', $this->Nombre);
        $consulta->bindParam(':ap_pa', $this->A_Pat);
        $consulta->bindParam(':ap_ma', $this->A_Mat);
        $consulta->bindParam(':sexo', $this->Sexo);
        $consulta->bindParam(':fechadenacimiento', $this->F_Nac);
        $consulta->bindParam(':vigencia', $this->Vigencia);
        $consulta->bindParam(':provincia', $this->Provincia);
        $consulta->bindParam(':grupo', $this->Grupo_S);
        $consulta->bindParam(':seccion', $this->Seccion);
        $consulta->bindParam(':scouterR', $this->Scouter_Responsable);
        $consulta->bindParam(':celular', $this->Tel_Cel);
        $consulta->bindParam(':passuser', $this->Password);
        $consulta->bindParam(':estatura', $this->Estatura);
        $consulta->bindParam(':peso', $this->Peso);
        $consulta->bindParam(':color-cabello', $this->Color_Cabello);
        $consulta->bindParam(':color-ojos', $this->Color_Ojos);
        $consulta->bindParam(':color-piel', $this->Color_Piel);
        $consulta->bindParam(':tiposangre', $this->Tipo_Sangre);
        $consulta->bindParam(':donarsangre', $this->Donar_Sangre);
        $consulta->bindParam(':dieta', $this->Dieta);
        $consulta->bindParam(':bebealcohol', $this->Alcohol);
        $consulta->bindParam(':fuma', $this->Fumador);
        $consulta->bindParam(':sustanciasrecreativas', $this->Uso_Sustancias);
        $consulta->bindParam(':familiadiabetes', $this->Fam_Diabetes);
        $consulta->bindParam(':familiahipertension', $this->Fam_Hipertension);
        $consulta->bindParam(':afecciones', $this->Afecciones_Frio_Calor);
        $consulta->bindParam(':infoemerg', $this->Fk_Info_Emergencia);
        $consulta->bindParam(':regnalito', $this->Fk_Regnal);
        $consulta->bindParam(':tipouser', $this->Tipo_Usuario);

        if (!consulta || !consultaEmergencia)
        {
            $this->mensaje = $mensaje = $conexion->errorInfo();
        }else {
            $consultaEmergencia->execute();
            $consulta->execute();
            $this->mensaje = "Se hizo el insert";
        }

    }

}