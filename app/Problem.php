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
            case "adminID":
                return self::adminIDData();
            case "adminIDEdit":
                return self::adminIDEditData();
            case "adminIDEditSuccess":
                return self::adminIDEditSuccessData();
            case "adminIDEditError":
                return self::adminIDEditErrorData();
            case "adminIDDelete":
                return self::adminIDDeleteData();
            case "adminIDDeleteSuccess":
                return self::adminIDDeleteSuccessData();
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
    public static function adminIDData()
    {
        $data["title"] = "Dados do Problema";
        
        return $data;
    }
    public static function adminIDEditData()
    {
        $data["title"] = "Editar Problema";
        
        return $data;
    }
    public static function adminIDEditSuccessData()
    {
        $data["title"] = "Sucesso ao editar Problema";
        
        return $data;
    }
    public static function adminIDEditErrorData()
    {
        $data["title"] = "Erro ao editar Problema";
        
        return $data;
    }
    public static function adminIDDeleteData()
    {
        $data["title"] = "Remover Problema";
        
        return $data;
    }
    public static function adminIDDeleteSuccessData()
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
