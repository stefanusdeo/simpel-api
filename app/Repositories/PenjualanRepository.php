<?php

namespace App\Repositories;

use App\Models\Pelanggan;
use App\Models\Penjualan;

class PenjualanRepository
{

    public function getPenjualan($filters)
    {
        return Penjualan::with(['pelanggan', 'items.barang'])->when(isset($filters['id']), function ($query) use ($filters) {
            return $query->where('id', $filters['id']);
        })->when(isset($filters['id_nota']), function ($query) use ($filters) {
            return $query->where('id_nota', $filters['id_nota']);
        })->when(isset($filters['kode_pelanggan']), function ($query) use ($filters) {
            return $query->where('kode_pelanggan', $filters['kode_pelanggan']);
        })->when(isset($filters['pelanggan_id']), function ($query) use ($filters) {
            return $query->where('pelanggan_id', $filters['pelanggan_id']);
        })->when(isset($filters['tgl']), function ($query) use ($filters) {
            return $query->whereDate('tgl', '=', $filters['tgl']);
        });
    }

    public function update($id, $data)
    {
        return Penjualan::whereId($id)->update($data);
    }

    public function store($data)
    {
        $resp = Penjualan::create($data);
        return $resp->id;
    }

    public function destroy($id)
    {
        Penjualan::whereId($id)->delete();
    }
}
