<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class obat extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga'
    ];

}
