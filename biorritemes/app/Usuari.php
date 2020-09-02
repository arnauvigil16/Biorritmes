<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    private $name;
    private $nacimiento;
    private $dias;
    private $fisic;
    private $emocional;
    private $intelectual;

    public function setName($name){
        $this->name = $name;
    }

    public function setNacimiento($nacimiento){
        $this->nacimiento = $nacimiento;
    }

    public function setFisic($fisic){
        $this->fisic = $fisic;
    }

    public function setDias($dias){
        $this->dias = $dias;
    }

    public function setEmocional($emocional){
        $this->emocional = $emocional;
    }

    public function setIntelectual($intelectual){
        $this->intelectual = $intelectual;
    }

    public function getName(){
        return $this->name;
    }

    public function getDias(){
        return $this->dias;
    }

    public function getNacimiento(){
        return $this->nacimiento;
    }

    public function getFisic(){
        return $this->fisic;
    }

    public function getEmocional(){
        return $this->emocional;
    }

    public function getIntelectual(){
        return $this->intelectual;
    }

    
}
