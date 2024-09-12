<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\InputNilai;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class InputNilaiCont extends Controller
{
    
    public function index()
    {
        $user = Auth::user();

        $data = InputNilai::where('user_id', $user->id)->first();
        if ($data) {
            // Lakukan sesuatu jika data ditemukan
            $score = json_decode($data->score);
            $lampiran = InputNilai::firstOrNew(['user_id' => $user->id]);
            return view('input_nilai.index', compact('user','score','lampiran'));
        } else {
            return view('input_nilai.index', compact('user'));
            
        }
  
        
        
        
    // $data = InputNilai::where('user_id', 2)->first();
    //   print_r($data->score);
        
    }

    public function update(Request $request)
    {

        $id = Auth::id();
        $nilai = $request->except(['_token','_method']);
        $value = [
            'user_id' => $id,
            'score' => json_encode($nilai)
        ];
      
        $data = InputNilai::where('user_id', $id)->first();

        if ($data) {
            // Update jika data ditemukan
            $data->update(['score' => $nilai ]);
        } else {
            // Insert jika data tidak ditemukan
            InputNilai::create($value);
        }

        $request->validate([
            'lampiran' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|',
          
        ]);

        $lampiran = InputNilai::firstOrNew(['user_id' => $id]);
        
        // Fungsi untuk menghapus foto yang sudah ada
        function deleteOldFile($filePath) {
            if ($filePath && File::exists(public_path('assets/lampiran') . '/' . $filePath)) {
                File::delete(public_path('assets/lampiran') . '/' . $filePath);
            }
        }

        if ($request->hasFile('lampiran')) {
            deleteOldFile($lampiran->lampiran);
            $file = $request->file('lampiran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $request->lampiran->move(public_path('assets/lampiran'), $fileName);
            $lampiran->lampiran = $fileName;
        }

        $lampiran->save();
        return redirect()->back()->with('success', 'Data berhasil disimpan!');


        // dd(json_encode($formData));

 
    }

    public function delete($filename){

    //   dd($filename);
      
        $user = Auth::user();
        $file_path = storage_path('asset/lampiran/'.$filename);

        if (file_exists($file_path)) {
            // Hapus file dari storage
            unlink($file_path);

        $value = [
            'lampiran' => null,
        ];
      
        $data = InputNilai::where('user_id', $user->id)->first();
        $data->update($value);
        
            return back()->with('success', 'File berhasil dihapus.');
        }

        return back()->withErrors(['file' => 'File tidak ditemukan.']);
    }
}