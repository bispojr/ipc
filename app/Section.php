<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public static function data($method, $course, $section)
    {
        switch($method){
            case "frequency":
                return self::frequencyData();
            default: break;
        }
    }
    public static function frequencyData()
    {
        $data["title"] = "Lista de Frequências";
        
        return $data;
    }
}
