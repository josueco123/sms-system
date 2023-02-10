<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function createLog($action, $user_id, $data){
        $log = new Log();
        $log->user_id = $user_id;
        $log->date_log = date('y-m-d');
        $log->time_log = date('h:i:s');
        $log->action =  Log::textAction($action);
        $log->description =  Log::createDescription($data);
        return $log->save();
    }

    private static function textAction($action){
        /*ACIONES 1 = crear; 2 = editar; 3 = eliminar */
        if($action == 1) {
          return "CREAR";
        } else if($action == 2) {
          return "EDITAR";
        } else if($action == 3){
          return "ELIMINAR";
        }
        
      }
    
    private function createDescription($data){
        $description = "CAMPOS: ";
        $main_object = $datos->toArray();
        foreach($main_object as $key => $value){
          if((!is_array($key) && !is_array($value)) && $key != "deleted_at" && $key != "created_at" && $key != "updated_at") {
            $description .= $key.": ".$value."; ";
          }
        }
        return $description;
      }
}
