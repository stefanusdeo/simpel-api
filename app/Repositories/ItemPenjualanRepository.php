<?php

namespace App\Repositories;

use App\Models\Barang;
use App\Models\ItemPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;

class ItemPenjualanRepository
{

    public function getItemPenjualan($filters)
    {
        return ItemPenjualan::with(['nota', 'barang'])->when(isset($filters['id']), function ($query) use ($filters) {
            return $query->where('id', $filters['id']);
        })->when(isset($filters['nota']), function ($query) use ($filters) {
            return $query->where('nota', $filters['nota']);
        })->when(isset($filters['nota_id']), function ($query) use ($filters) {
            return $query->where('nota_id', $filters['nota_id']);
        })->when(isset($filters['kode_barang']), function ($query) use ($filters) {
            return $query->where('kode_barang', $filters['kode_barang']);
        })->when(isset($filters['barang_id']), function ($query) use ($filters) {
            return $query->where('barang_id', $filters['barang_id']);
        });
    }

    public function update($id, $data)
    {
        return ItemPenjualan::whereId($id)->update($data);
    }

    public function store($data)
    {
        $resp = ItemPenjualan::create($data);
        return $resp->id;
    }

    public function destroy($id)
    {
        ItemPenjualan::whereId($id)->delete();
    }

    public function destroyByNotaId($id)
    {
        ItemPenjualan::where('nota_id', $id)->delete();
    }
}
