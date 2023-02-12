<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlackList extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'blacklists';

    public static function saveInBlackList($request){
        $blackList = new BlackList();
        $blackList->cedula = $request->cedula;
        $blackList->name = $request->first_name;
        $blackList->first_last_name = $request->first_last_name;
        $blackList->second_last_name = $request->second_last_name;
        $blackList->phone_number = $request->phone_number;
        return $blackList->save();

    }

    public static function getClientsBlackList(){

        $clientsBlackList = BlackList::orderByDesc('id')->paginate(8);
        return $clientsBlackList;

    }

    public static function editPhoneNumber($id,$request){
        
        $clientBlackList = BlackList::find($id);
        $clientBlackList->phone_number = $request->phone_number;
        return $clientBlackList->save();

    }

    public static function deleteBlacklistClient($id){
        
        $clientBlackList = BlackList::find($id);
        return $clientBlackList->delete();
    }

    public static function isClientBlacklist($phone){
        $clientsBlackList = BlackList::where('phone_number', $phone)->first();

        if(empty($clientsBlackList)){
            return false;
        }else {
            return true;
        }
    }
}
