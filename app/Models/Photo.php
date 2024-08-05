<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'photo_1',
        'photo_2',
        'photo_3',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}