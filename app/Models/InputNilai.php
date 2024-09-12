<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputNilai extends Model
{
    use HasFactory;
    
    protected $table = 'nilai';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'is_locked',
        'evaluator_name',
        'evaluator_notes',
        'score',
      
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}