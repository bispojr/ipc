<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public static function data($method)
    {
        switch($method){
            case "adminIndex":
                return self::adminIndexData();
            case "adminCode":
                return self::adminCodeData();
            case "adminCodeEdit":
                return self::adminCodeEditData();
            case "adminCodeEditSuccess":
                return self::adminCodeEditSuccessData();
            case "adminCodeEditError":
                return self::adminCodeEditErrorData();
            case "adminCodeDelete":
                return self::adminCodeDeleteData();
            case "adminCodeDeleteSuccess":
                return self::adminCodeDeleteSuccessData();
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
        $data["title"] = "Base de Aulas";
        
        return $data;
    }
    public static function adminCodeData()
    {
        $data["title"] = "Dados do Aula";
        
        return $data;
    }
    public static function adminCodeEditData()
    {
        $data["title"] = "Editar Aula";
        
        return $data;
    }
    public static function adminCodeEditSuccessData()
    {
        $data["title"] = "Sucesso ao editar Aula";
        
        return $data;
    }
    public static function adminCodeEditErrorData()
    {
        $data["title"] = "Erro ao editar Aula";
        
        return $data;
    }
    public static function adminCodeDeleteData()
    {
        $data["title"] = "Remover Aula";
        
        return $data;
    }
    public static function adminCodeDeleteSuccessData()
    {
        $data["title"] = "Sucesso ao remover Aula";
        
        return $data;
    }
    public static function adminCreateData()
    {
        $data["title"] = "Criar Aula";
        
        return $data;
    }
    public static function adminCreateSuccessData()
    {
        $data["title"] = "Sucesso ao criar aula!";
        
        return $data;
    }
    public static function adminCreateErrorData()
    {
        $data["title"] = "Erro ao criar aula!";
        
        return $data;
    }
}
