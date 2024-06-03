<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('modules.user.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        $user = User::find($id);

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/photos/';
            $image_path = $destinationPath . '/' . $user->image;

            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $user->update($input);

        return redirect()->route('profile')->with('success', 'Record updated successfully');
    }

    public function changepassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|same:confirm-password',
        ]);

        $input = $request->all();

        $user = User::find($id);

        $input['password'] = Hash::make($input['password']);

        $user->update($input);

        return redirect()->route('profile')->with('success', 'Record updated successfully');
    }
}
