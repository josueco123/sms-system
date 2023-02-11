<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlackListRequest;
use App\Http\Requests\UpdateBlackListRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Log as BLACKLIST_LOG;

class BlackListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlackListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlackListRequest $request)
    {
        //
        $result = BlackList::saveInBlackList($request);
        BLACKLIST_LOG::createLog("INSERTAR",  Auth::id(), $request);

        if($result){
            return redirect('clientlist')->with('status', '200')
                                ->with('message', 'Cliente Agregado en la Lista Negra Satisfactoriamente');
        }else {
            return redirect('clientlist')->with('status', '500')
                                ->with('message', 'Ups, Hubo un error al agregar el Clente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function show(BlackList $blackList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackList $blackList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlackListRequest  $request
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlackListRequest $request, BlackList $blackList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlackList $blackList)
    {
        //
    }

    public function listClientsBlackList (){

        $data = BlackList::getClientsBlackList();
        return view('clientList',compact('data'));
    }

    public function editPhoneNumber(Request $request){

        $result = BlackList::editPhoneNumber($request->client_id,$request);
        BLACKLIST_LOG::createLog("ACTUALIZAR",  Auth::id(), $request);

        if($result){
            return redirect('clientlist')->with('status', '200')
                                ->with('message', 'Número de teléfono actulizado correctamente');
        }else {
            return redirect('clientlist')->with('status', '500')
                                ->with('message', 'Ups, Hubo un error al actualizar');
        }
    }

    public function deleteClientBlacklist($id){

        $result = BlackList::deleteBlacklistClient($id);
        $data = collect(['id' => $id]);
        BLACKLIST_LOG::createLog("ELIMINAR",  Auth::id(), $data);

        if($result){
            return redirect('clientlist')->with('status', '200')
                                ->with('message', 'Cliente eliminado correctamente');
        }else {
            return redirect('clientlist')->with('status', '500')
                                ->with('message', 'Ups, Hubo un error al eliminar');
        }

    }
}
