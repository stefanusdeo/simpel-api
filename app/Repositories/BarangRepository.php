<?php

namespace App\Repositories;

use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Penjualan;

class BarangRepository
{

    public function getBarang($filters)
    {
        return Barang::when(isset($filters['id']), function ($query) use ($filters) {
            return $query->where('id', $filters['id']);
        })->when(isset($filters['kode']), function ($query) use ($filters) {
            return $query->where('kode', $filters['kode']);
        })->when(isset($filters['nama']), function ($query) use ($filters) {
            return $query->where('nama', 'like', '%' . $filters['nama'] . '%');
        })->when(isset($filters['kategori']), function ($query) use ($filters) {
            return $query->where('kategori', $filters['kategori']);
        });
    }

    public function update($id, $data)
    {
        return Barang::whereId($id)->update($data);
    }

    public function store($data)
    {
        $resp = Barang::create($data);
        return $resp->id;
    }

    public function destroy($id)
    {
        Barang::whereId($id)->delete();
    }
}
