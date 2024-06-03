<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index()
    {
        return view('modules.marketing.index');
    }

    public function create()
    {
        return view('modules.marketing.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $marketing = new Marketing;

        // $marketing->name = $request->name;
        // $marketing->email = $request->email;
        // $marketing->phone = $request->phone;

        // $marketing->save();

        // return redirect('marketing');
    }

    public function edit($id)
    {
        // $marketing = Marketing::find($id);

        // return view('modules.marketing.edit', ['marketing' => $marketing]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $marketing = Marketing::find($id);

        // $marketing->name = $request->name;
        // $marketing->email = $request->email;
        // $marketing->phone = $request->phone;
    }

    public function destroy($id)
    {
        // $marketing = Marketing::find($id);
        // $marketing->delete();
        // return redirect('marketing');
    }
}
