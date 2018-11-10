<?php

class usuario
{

    private $CUM;
    private $Nombre;
    private $A_Pat;
    private $A_Mat;
    private $Sexo;
    private $F_Nac;
    private $Vigencia;
    private $Provincia;
    private $Grupo_S;
    private $Seccion;
    private $Scouter_Responsable;
    private $Tel_Cel;
    private $Password;
    private $Estatura;
    private $Peso;
    private $Color_Cabello;
    private $Color_Ojos;
    private $Color_Piel;
    private $Tipo_Sangre;
    private $Donar_Sangre;
    private $Dieta;
    private $Alcohol;
    private $Fumador;
    private $Uso_Sustancias;
    private $Fam_Diabetes;
    private $Fam_Hipertension;
    private $Afecciones_Frio_Calor;
    private $Fk_Info_Emergencia;
    private $Fk_Regnal;
    private $Tipo_Usuario;

    public function getCUM()
    {
        return $this->CUM;
    }

    public function setCUM($CUM)
    {
        $this->CUM = $CUM;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function getA_Pat()
    {
        return $this->A_Pat;
    }

    public function setA_Pat($A_Pat)
    {
        $this->A_Pat = $A_Pat;
    }

    public function getA_Mat()
    {
        return $this->A_Mat;
    }

    public function setA_Mat($A_Mat)
    {
        $this->A_Mat = $A_Mat;
    }

    public function getSexo()
    {
        return $this->Sexo;
    }

    public function setSexo($Sexo)
    {
        $this->Sexo = $Sexo;
    }

    public function getF_Nac()
    {
        return $this->F_Nac;
    }

    public function setF_Nac($F_Nac)
    {
        $this->F_Nac = $F_Nac;
    }

    public function getVigencia()
    {
        return $this->Vigencia;
    }

    public function setVigencia($Vigencia)
    {
        $this->Vigencia = $Vigencia;
    }

    public function getProvincia()
    {
        return $this->Provincia;
    }

    public function setProvincia($Provincia)
    {
        $this->Provincia = $Provincia;
    }

    public function getGrupo_S()
    {
        return $this->Grupo_S;
    }

    public function setGrupo_S($Grupo_S)
    {
        $this->Grupo_S = $Grupo_S;
    }

    public function getSeccion()
    {
        return $this->Seccion;
    }

    public function setSeccion($Seccion)
    {
        $this->Seccion = $Seccion;
    }

    public function getScouter_Responsable()
    {
        return $this->Scouter_Responsable;
    }

    public function setScouter_Responsable($Scouter_Responsable)
    {
        $this->Scouter_Responsable = $Scouter_Responsable;
    }

    public function getTel_Cel()
    {
        return $this->Tel_Cel;
    }

    public function setTel_Cel($Tel_Cel)
    {
        $this->Tel_Cel = $Tel_Cel;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function getEstatura()
    {
        return $this->Estatura;
    }

    public function setEstatura($Estatura)
    {
        $this->Estatura = $Estatura;
    }

    public function getPeso()
    {
        return $this->Peso;
    }

    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
    }

    public function getColor_Cabello()
    {
        return $this->Color_Cabello;
    }

    public function setColor_Cabello($Color_Cabello)
    {
        $this->Color_Cabello = $Color_Cabello;
    }

    public function getColor_Ojos()
    {
        return $this->Color_Ojos;
    }

    public function setColor_Ojos($Color_Ojos)
    {
        $this->Color_Ojos = $Color_Ojos;
    }

    public function getColor_Piel()
    {
        return $this->Color_Piel;
    }

    public function setColor_Piel($Color_Piel)
    {
        $this->Color_Piel = $Color_Piel;
    }

    public function getTipo_Sangre()
    {
        return $this->Tipo_Sangre;
    }

    public function setTipo_Sangre($Tipo_Sangre)
    {
        $this->Tipo_Sangre = $Tipo_Sangre;
    }

    public function getDonar_Sangre()
    {
        return $this->Donar_Sangre;
    }

    public function setDonar_Sangre($Donar_Sangre)
    {
        $this->Donar_Sangre = $Donar_Sangre;
    }

    public function getDieta()
    {
        return $this->Dieta;
    }

    public function setDieta($Dieta)
    {
        $this->Dieta = $Dieta;
    }

    public function getAlcohol()
    {
        return $this->Alcohol;
    }

    public function setAlcohol($Alcohol)
    {
        $this->Alcohol = $Alcohol;
    }

    public function getFumador()
    {
        return $this->Fumador;
    }

    public function setFumador($Fumador)
    {
        $this->Fumador = $Fumador;
    }

    public function getUso_Sustancias()
    {
        return $this->Uso_Sustancias;
    }

    public function setUso_Sustancias($Uso_Sustancias)
    {
        $this->Uso_Sustancias = $Uso_Sustancias;
    }

    public function getFam_Diabetes()
    {
        return $this->Fam_Diabetes;
    }

    public function setFam_Diabetes($Fam_Diabetes)
    {
        $this->Fam_Diabetes = $Fam_Diabetes;
    }

    public function getFam_Hipertension()
    {
        return $this->Fam_Hipertension;
    }

    public function setFam_Hipertension($Fam_Hipertension)
    {
        $this->Fam_Hipertension = $Fam_Hipertension;
    }

    public function getAfecciones_Frio_Calor()
    {
        return $this->Afecciones_Frio_Calor;
    }

    public function setAfecciones_Frio_Calor($Afecciones_Frio_Calor)
    {
        $this->Afecciones_Frio_Calor = $Afecciones_Frio_Calor;
    }

    public function getFk_Info_Emergencia()
    {
        return $this->Fk_Info_Emergencia;
    }

    public function setFk_Info_Emergencia($Fk_Info_Emergencia)
    {
        $this->Fk_Info_Emergencia = $Fk_Info_Emergencia;
    }

    public function getFk_Regnal()
    {
        return $this->Fk_Regnal;
    }

    public function setFk_Regnal($Fk_Regnal)
    {
        $this->Fk_Regnal = $Fk_Regnal;
    }

    public function getTipo_Usuario()
    {
        return $this->Tipo_Usuario;
    }

    public function setTipo_Usuario($Tipo_Usuario)
    {
        $this->Tipo_Usuario = $Tipo_Usuario;
    }

}

