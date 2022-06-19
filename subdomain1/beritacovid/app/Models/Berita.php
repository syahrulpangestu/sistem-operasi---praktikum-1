<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'image',
        'user_id',
        'category_id',
    ];
    public $timestamps = true;
    public function users()
    {
        return $this->belongsTo(Users::class);
    }
    public function categories()
    {
        return $this->belongsTo(Categoies::class);
    }
}
