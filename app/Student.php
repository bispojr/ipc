<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function data($method)
    {
        switch($method){
            case "adminIndex":
                return self::adminIndexData();
            case "adminUsername":
                return self::adminUsernameData();
            case "adminCreate":
                return self::adminUsernameData();
            default: break;
        }
    }
    public static function adminIndexData()
    {
        $data["title"] = "Base de Alunos";
        
        return $data;
    }
    public static function adminUsernameData()
    {
        $data["title"] = "Dados do Aluno";
        
        return $data;
    }
    public static function adminCreateData()
    {
        $data["title"] = "Criar aluno";
        
        return $data;
    }
}
