<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    private $name;
    private $webs;

    public function setName($name){
        $this->name = $name;
    }

    public function setWeb($webs){
        $this->webs = $webs;
    }

    public function getName(){
        return $this->name;
    }

    public function getWeb(){
        return $this->webs;
    }

    
}
