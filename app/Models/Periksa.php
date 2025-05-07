<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksas'; 

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    // Pasien
    public function pasien()
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    // Dokter
    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    // Detail Periksa
    public function detailPeriksas()
    {
        return $this->hasMany(Detail_Periksa::class, 'id_periksa');
    }

    public function obats()
    {
    return $this->belongsToMany(Obat::class, 'detail_periksas', 'id_periksa', 'id_obat');
    }

}
