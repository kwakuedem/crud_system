<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:100',
            'password' => 'required'
        ]);

        auth()->attempt($request->only('username', 'password'));
        $user = Auth::user();
        return redirect()->route('dashboard');
    }
}
