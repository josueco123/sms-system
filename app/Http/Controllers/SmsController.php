<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Imports\SmsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SmsFilterExport;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SmsController extends Controller
{
    //
    public function getDataImport(Request $request) {  
        $request->validate([
            'file_input' => 'required|mimes:xls,xlsx'
          ]);

        $file = Storage::putFile('excel_import', $request->file('file_input'));
        $import = new SmsImport();
        Excel::import($import, $file);

        $data = $import->getArray();

        list($arraySmsClients ,$arrayBlacklist) = $this->filterData($data);
        
        return Excel::download(new SmsFilterExport($arraySmsClients), "BD SMS filtrado".date("Y-m-d H:i:s").'.xlsx');
    }

    private function filterData($data){

        $arrayBlacklist = [];
        $arraySmsClients = [];
        $headers = ["Telefono", "Mensaje"];
        array_push($arraySmsClients, $headers);

        foreach ($data as $client){
            if(BlackList::isClientBlacklist($client['phone'])){
                array_push($arrayBlacklist,$client);
            }else{
                if(is_numeric($client['phone'])){
                    array_push($arraySmsClients,$client);
                }
                
            }
        }
        
        return [$arraySmsClients, $arrayBlacklist];
    }

  
}
