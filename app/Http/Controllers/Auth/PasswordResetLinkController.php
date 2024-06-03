<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Attempt to send the password reset link to this user.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // If the password reset link was sent successfully, flash a success message to the session.
        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        // If there was an error, redirect back with the input and errors.
        return back()->withInput($request->only('email'))
                    ->withErrors(['email' => __($status)]);
    }
}
