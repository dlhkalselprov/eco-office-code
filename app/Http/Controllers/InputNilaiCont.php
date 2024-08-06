<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nilai;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class InputNilaiCont extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
       
        
        return view('input_nilai.index', compact('user'));
      
        
    }
}