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
use App\Models\Photo;
use Illuminate\Support\Facades\File;

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

        $photo = Photo::where('user_id', Auth::id())->first();


        
        return view('profile.index', compact('user','photo'));
      
        
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
        $id = Auth::id();
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

        $request->validate([
            'photo_1' => 'nullable|image|mimes:jpeg,png,jpg|max:18000',
            'photo_2' => 'nullable|image|mimes:jpeg,png,jpg|max:18000',
            'photo_3' => 'nullable|image|mimes:jpeg,png,jpg|max:18000',
        ]);

        $photos = Photo::firstOrNew(['user_id' => $id]);
        
        // Fungsi untuk menghapus foto yang sudah ada
        function deleteOldPhoto($photoPath) {
            if ($photoPath && File::exists(public_path('assets/images/photos') . '/' . $photoPath)) {
                File::delete(public_path('assets/images/photos') . '/' . $photoPath);
            }
        }

        if ($request->hasFile('photo_1')) {
            deleteOldPhoto($photos->photo_1);
            $file = $request->file('photo_1');
            $fileName = time() . '_1.' . '_' . $file->getClientOriginalName();
            $request->photo_1->move(public_path('assets/images/photos'), $fileName);
            $photos->photo_1 = $fileName;
        }

        if ($request->hasFile('photo_2')) {
            deleteOldPhoto($photos->photo_2);
            $file = $request->file('photo_2');
            $fileName = time() . '_2.' . '_' . $file->getClientOriginalName();
            $request->photo_2->move(public_path('assets/images/photos'), $fileName);
            $photos->photo_2 = $fileName;
        }

        if ($request->hasFile('photo_3')) {
            deleteOldPhoto($photos->photo_3);
            $file = $request->file('photo_3');
            $fileName = time() . '_3.' . '_' . $file->getClientOriginalName();
            $request->photo_3->move(public_path('assets/images/photos'), $fileName);
            $photos->photo_3 = $fileName;
        }

        $photos->save();


        
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