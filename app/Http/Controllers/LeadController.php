<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        return view('modules.leads.index');
    }

    public function create()
    {
        return view('modules.leads.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $lead = new Lead;

        // $lead->name = $request->name;
        // $lead->email = $request->email;
        // $lead->phone = $request->phone;

        // $lead->save();

        // return redirect('leads');
    }

    public function edit($id)
    {
        // $lead = Lead::find($id);

        // return view('modules.leads.edit', ['lead' => $lead]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $lead = Lead::find($id);

        // $lead->name = $request->name;
        // $lead->email = $request->email;
        // $lead->phone = $request->phone;
    }

    public function destroy($id)
    {
        // $lead = Lead::find($id);
        // $lead->delete();

        // return redirect('leads');
    }
}
