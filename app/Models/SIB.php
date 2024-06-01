<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIB extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_dokumen', 'tanggal', 'penanggung_jawab', 'no', 'perusahaan', 
        'jumlah_orang', 'area_kerja', 'deskripsi_pekerjaan', 
        'peralatan', 'pengendalian_bahaya'
    ];

    protected $casts = [
        'peralatan' => 'array',
        'pengendalian_bahaya' => 'array'
    ];
}
