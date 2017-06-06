<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    public static function data($method)
    {
        switch($method){
            case "adminIndex":
                return self::adminIndexData();
            default: break;
        }
    }
    public static function adminIndexData()
    {
        $data["title"] = "Listas de Frequências";
        
        return $data;
    }
}
