<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    
    public function index()
    {
        $clients = Client::all();
       // dd($users);

        return View('clients.index',compact('clients'));
    }

    
    public function create()
    {
        return view('clients.create');
    }


    public function store(StoreClientRequest $client)
    {
        $mensaje = Client::create([ 
            'user_id' => $client->user_id 
        ]);
        if($mensaje)
        {
            toast('Cliente agregado','success');
            
        }else{
            toast('Cliente no agregado','warning');
        }

        return redirect()->route('clients.index');
    }

 
    public function show(Client $client)
    {
        //
    }

 
    public function edit(Client $client)
    {
        return view('clients.edit',compact('client'));
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        $mensaje = $client->update([
            'user_id' => $request->user_id
        ]);
        if($mensaje)
        {
            toast('Cliente actualizado','success');
            
        }else{
            toast('Cliente no actualizado','warning');
        }
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $mensaje = $client->delete();
        if($mensaje)
        {
            toast('Cliente eliminado','success');
            
        }else{
            toast('Cliente no eliminado','warning');
        }
        return redirect()->route('clients.index');
    }
}
