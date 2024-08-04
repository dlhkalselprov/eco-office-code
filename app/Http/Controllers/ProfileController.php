<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */


    public function index()
    {
        $user = Auth::user();
        $nama_instansi = $user->nama_instansi;
        $alamat_instansi = $user->alamat_instansi;
        $nama_kepala = $user->nama_kepala;
        $nama_pic = $user->nama_pic;
        $jabatan_pic = $user->jabatan_pic;
        $no_pic = $user->no_pic;
        $email = $user->email;
        $created_at = $user->created_at;
        
       
    
        return view('profile.index', compact('user'));
      
        
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $id =  $user = Auth::user()->id;
        $validator = Validator::make($request->all(), 
        [
            'nama_instansi' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$id],
            'alamat_instansi' => ['required', 'string', 'max:255'],
            'nama_kepala' => ['required', 'string', 'max:255'],
            'jabatan_kepala' => ['required', 'string', 'max:255'],
            'nama_pic' => ['required', 'string', 'max:255'],
            'jabatan_pic' => ['required', 'string', 'max:255'],
            'no_pic' => ['required',  'string', 'max:15', 'unique:users,no_pic,'.$id],
            
        ]);
        // dd($validator);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
      
   
        $data = User::findOrFail($id);
        $data->nama_instansi = $request->nama_instansi;
        $data->email = $request->email;
        $data->alamat_instansi = $request->alamat_instansi;
        $data->nama_kepala = $request->nama_kepala;
        $data->jabatan_kepala = $request->jabatan_kepala;
        $data->nama_pic = $request->nama_pic;
        $data->jabatan_pic = $request->jabatan_pic;
        $data->no_pic = $request->no_pic;
        // $data->updated_at = timestamps();
        $data->update();
        // $request->user()->save();
        
        notify()->success('Berhasil menyimpan perubahan data');

        return Redirect::route('profile-user.index');
    }
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}