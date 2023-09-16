<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;


class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        if ($request->user()->update([
            'password' => Hash::make($validated['password']),
        ])) {
            return back()->with('success', 'Password berhasil diperbaharui');
        } else {
            return back()->with('error', 'Password gagal diperbaharui');
        }
    }
}
