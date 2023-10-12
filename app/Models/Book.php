<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn';

    protected $fillable = [
        'isbn',
        'judul',
        'halaman',
        'kategori',
        'penerbit',
        'created_at',
        'updated_at'
    ];
}
