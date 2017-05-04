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
            case "adminUsernameEdit":
                return self::adminUsernameEditData();
            case "adminUsernameEditSuccess":
                return self::adminUsernameEditSuccessData();
            case "adminUsernameEditError":
                return self::adminUsernameEditErrorData();
            case "adminUsernameDelete":
                return self::adminUsernameDeleteData();
            case "adminUsernameDeleteSuccess":
                return self::adminUsernameDeleteSuccessData();
            case "adminCreate":
                return self::adminCreateData();
            case "adminCreateSuccess":
                return self::adminCreateSuccessData();
            case "adminCreateError":
                return self::adminCreateErrorData();
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
    public static function adminUsernameEditData()
    {
        $data["title"] = "Editar Aluno";
        
        return $data;
    }
    public static function adminUsernameEditSuccessData()
    {
        $data["title"] = "Sucesso ao editar Aluno";
        
        return $data;
    }
    public static function adminUsernameEditErrorData()
    {
        $data["title"] = "Erro ao editar Aluno";
        
        return $data;
    }
    public static function adminUsernameDeleteData()
    {
        $data["title"] = "Remover Aluno";
        
        return $data;
    }
    public static function adminUsernameDeleteSuccessData()
    {
        $data["title"] = "Sucesso ao remover Aluno";
        
        return $data;
    }
    public static function adminCreateData()
    {
        $data["title"] = "Criar aluno";
        
        return $data;
    }
    public static function adminCreateSuccessData()
    {
        $data["title"] = "Sucesso ao criar aluno!";
        
        return $data;
    }
    public static function adminCreateErrorData()
    {
        $data["title"] = "Erro ao criar aluno!";
        
        return $data;
    }
}
