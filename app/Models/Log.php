<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function createLog($action, $user_id, $data){
        $log = new Log();
        $log->user_id = $user_id;
        $log->date = date('Y-m-d');
        $log->time = date('h:i:s');
        $log->action =  $action;
        $log->description =  Log::createDescription($data);
        return $log->save();
    }
    
    private static function createDescription($data){
        $description = "CAMPOS: ";
        $main_object = $data->toArray();
        foreach($main_object as $key => $value){
          if((!is_array($key) && !is_array($value)) && $key != "deleted_at" && $key != "created_at" && $key != "updated_at" && $key != "_token") {
            $description .= $key.": ".$value."; ";
          }
        }
        return $description;
      }
}
