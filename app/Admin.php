<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function data($method)
    {
        switch($method){
            case "index":
                return self::indexData();
            default: break;
        }
    }
    public static function indexData()
    {
        $data["title"] = "Painel (Admin)";
        
        return $data;
    }
}
