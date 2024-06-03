<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonusController extends Controller
{
    public function index()
    {
        return view('modules.bonus.index');
    }

    public function create()
    {
        return view('modules.bonus.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $bonus = new Bonus;

        // $bonus->name = $request->name;
        // $bonus->email = $request->email;
        // $bonus->phone = $request->phone;

        // $bonus->save();

        // return redirect('bonus');
    }

    public function edit($id)
    {
        // $bonus = Bonus::find($id);

        // return view('modules.bonus.edit', ['bonus' => $bonus]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $bonus = Bonus::find($id);

        // $bonus->name = $request->name;
        // $bonus->email = $request->email;
        // $bonus->phone = $request->phone;

        // $bonus->save();

        // return redirect('bonus');
    }

    public function destroy($id)
    {
        // $bonus = Bonus::find($id);
        // $bonus->delete();
    }
}
