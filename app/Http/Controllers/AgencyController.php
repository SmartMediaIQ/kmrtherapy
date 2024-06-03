<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        return view('modules.agency.index');
    }

    public function create()
    {
        return view('modules.agency.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $agency = new Agency;

        // $agency->name = $request->name;
        // $agency->email = $request->email;
        // $agency->phone = $request->phone;

        // $agency->save();

        // return redirect('agency');
    }

    public function edit($id)
    {
        // $agency = Agency::find($id);

        // return view('modules.agency.edit', ['agency' => $agency]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $agency = Agency::find($id);

        // $agency->name = $request->name;
        // $agency->email = $request->email;
        // $agency->phone = $request->phone;

        // $agency->save();

        // return redirect('agency');
    }

    public function destroy($id)
    {
        // $agency = Agency::find($id);
        // $agency->delete();
    }
}
