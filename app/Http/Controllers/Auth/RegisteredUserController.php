<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), 
        [
            'nama_instansi' => ['required', 'string', 'max:255'],
            'no_pic' => ['required',  'string', 'max:15', 'unique:'.User::class],
            'nama_pic' => ['required', 'string', 'max:255'],
            'jabatan_pic' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::create([
            'nama_instansi' => $request->nama_instansi,
            'no_pic' => $request->no_pic,
            'nama_pic' => $request->nama_pic,
            'jabatan_pic' => $request->jabatan_pic,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $user->roles()->attach(3);;

       

        event(new Registered($user));

        // Auth::login($user);

        return redirect(route('login', absolute: false));
    }
}