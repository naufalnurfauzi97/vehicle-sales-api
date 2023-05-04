<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Penjualan extends Kendaraan
{
    protected $collection = 'penjualan';

    protected $fillable = [
        'kendaraan_id',
        'tanggal_jual',
        'harga_jual',
        'nama_pembeli',
        'jumlah',
        'total_harga'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}