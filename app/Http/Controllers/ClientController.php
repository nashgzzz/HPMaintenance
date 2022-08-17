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
        Client::create([ 
            'user_id' => $client->user_id 
        ]);

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
        $client->update([
            'user_id' => $request->user_id
        ]);
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
