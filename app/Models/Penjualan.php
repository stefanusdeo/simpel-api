<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penjualan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "penjualans";
    protected $fillable = [
        'id_nota',
        'tgl',
        'kode_pelanggan',
        'pelanggan_id',
        'subtotal'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(ItemPenjualan::class, 'nota_id', 'id');
    }
}
