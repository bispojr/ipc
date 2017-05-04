<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
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
        $data["title"] = "Base de Problemas";
        
        return $data;
    }
    public static function adminCodeData()
    {
        $data["title"] = "Dados do Problema";
        
        return $data;
    }
    public static function adminCodeEditData()
    {
        $data["title"] = "Editar Problema";
        
        return $data;
    }
    public static function adminCodeEditSuccessData()
    {
        $data["title"] = "Sucesso ao editar Problema";
        
        return $data;
    }
    public static function adminCodeEditErrorData()
    {
        $data["title"] = "Erro ao editar Problema";
        
        return $data;
    }
    public static function adminCodeDeleteData()
    {
        $data["title"] = "Remover Problema";
        
        return $data;
    }
    public static function adminCodeDeleteSuccessData()
    {
        $data["title"] = "Sucesso ao remover Problema";
        
        return $data;
    }
    public static function adminCreateData()
    {
        $data["title"] = "Criar Problema";
        
        return $data;
    }
    public static function adminCreateSuccessData()
    {
        $data["title"] = "Sucesso ao criar problema!";
        
        return $data;
    }
    public static function adminCreateErrorData()
    {
        $data["title"] = "Erro ao criar problema!";
        
        return $data;
    }
}
