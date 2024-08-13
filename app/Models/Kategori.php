<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'blog_id'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
