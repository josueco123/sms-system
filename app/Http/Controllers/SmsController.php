<?php

namespace App\Http\Controllers;

use App\Imports\SmsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class SmsController extends Controller
{
    //
    public function getDataImport(Request $request) {        
        $file = Storage::putFile('excel_import', $request->file('file_input'));
        $import = new SmsImport;
        Excel::import($import, $file);
        $data = $import->getArray();
        return view('listsms', compact('data'));
    }
}
