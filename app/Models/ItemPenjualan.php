<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemPenjualan extends Model
{
    use HasFactory;
    protected $table = "item_penjualans";
    protected $fillable = [
        'nota',
        'kode_barang',
        'qty',
        'nota_id',
        'barang_id'
    ];

    public function nota()
    {
        return $this->belongsTo(Penjualan::class, 'nota_id', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
}
