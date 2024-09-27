<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\InputNilai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProsesPenilaianCont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $users = DB::table('users')
        ->join('nilai', 'users.id', '=', 'nilai.user_id')
        ->select('users.*', 'nilai.score')
        ->get();        
        return view('proses.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        try {
            // Mendekripsi ID
            $id_user = Crypt::decryptString($id);
       
            // Ambil user berdasarkan ID
            $data = InputNilai::where('user_id', $id_user)->first();
         
            
            $score = json_decode($data->score);
            $lampiran = InputNilai::firstOrNew(['user_id' => $id_user]);
            // dd($lampiran);
            // Menampilkan view dengan detail user
            return view('proses.show', compact('data','score','lampiran'));

        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            // Jika terjadi kesalahan saat dekripsi, kamu bisa mengarahkan ke halaman error atau menampilkan pesan
            abort(404, 'User tidak ditemukan.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}