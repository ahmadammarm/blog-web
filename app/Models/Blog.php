<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'user_id',
        'konten',
        'gambar',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
