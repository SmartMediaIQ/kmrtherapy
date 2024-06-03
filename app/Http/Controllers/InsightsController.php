<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        return view('modules.insights.index');
    }

    public function create()
    {
        return view('modules.insights.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $insights = new Insights;

        // $insights->name = $request->name;
        // $insights->email = $request->email;
        // $insights->phone = $request->phone;

        // $insights->save();

        // return redirect('insights');
    }

    public function edit($id)
    {
        // $insights = Insights::find($id);

        // return view('modules.insights.edit', ['insights' => $insights]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        // ]);

        // $insights = Insights::find($id);

        // $insights->name = $request->name;
        // $insights->email = $request->email;
        // $insights->phone = $request->phone;

        // $insights->save();

        // return redirect('insights');
    }

    public function destroy($id)
    {
        // $insights = Insights::find($id);
        // $insights->delete();
    }
}
