<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public static function data($method)
    {
        switch($method){
            case "student":
                return self::studentData();
            case "admin":
                return self::adminData();
            case "studentError":
                return self::studentErrorData();
            case "adminError":
                return self::adminErrorData();
            default: break;
        }
    }
    public static function studentData()
    {
        $data["title"] = "Login (Aluno)";
        
        return $data;
    }
    public static function adminData()
    {
        $data["title"] = "Login (Admin)";
        
        return $data;
    }
    public static function studentErrorData()
    {
        $data["title"] = "Erro de Login (Aluno)";
        
        return $data;
    }
    public static function adminErrorData()
    {
        $data["title"] = "Erro de Login (Admin)";
        
        return $data;
    }
}
