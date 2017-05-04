<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public static function data($method)
    {
        switch($method){
            case "index":
                return self::dataIndex();
        }
    }
    public static function dataIndex()
    {
        $data["title"] = "Principal";
        
        return $data;
    }
}
