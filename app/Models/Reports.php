<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'reports';

    protected $fillable = [
        'kode_pemeriksaan',
        'tanggal_pemeriksaan',
        'nama_pasien',
        'diagnosa',
        'pengobatan',
        'nama_dokter',
    ];
}