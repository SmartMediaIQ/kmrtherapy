<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('modules.clients.index');
    }

    public function create()
    {
        return view('modules.clients.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $client = new Client;

        // $client->name = $request->name;
        // $client->email = $request->email;
        // $client->phone = $request->phone;

        // $client->save();

        // return redirect('clients');
    }

    public function edit($id)
    {
        // $client = Client::find($id);

        // return view('modules.clients.edit', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $client = Client::find($id);

        // $client->name = $request->name;
        // $client->email = $request->email;
        // $client->phone = $request->phone;

        // $client->save();

        // return redirect('clients');
    }

    public function destroy($id)
    {
        // $client = Client::find($id);

        // $client->delete();

        // return redirect('clients');
    }
}
