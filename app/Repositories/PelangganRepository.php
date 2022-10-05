<?php

namespace App\Repositories;

use App\Models\Pelanggan;

class PelangganRepository
{

    public function getPelanggan($filters)
    {
        return Pelanggan::when(isset($filters['id']), function ($query) use ($filters) {
            return $query->where('id', $filters['id']);
        })->when(isset($filters['id_pelanggan']), function ($query) use ($filters) {
            return $query->where('id_pelanggan', $filters['id_pelanggan']);
        })->when(isset($filters['nama']), function ($query) use ($filters) {
            return $query->where('nama', 'like', '%' . $filters['nama'] . '%');
        })->when(isset($filters['domisili']), function ($query) use ($filters) {
            return $query->where('domisili', $filters['domisili']);
        })->when(isset($filters['jenis_kelamin']), function ($query) use ($filters) {
            return $query->where('jenis_kelamin', $filters['jenis_kelamin']);
        });
    }

    public function update($id, $data)
    {
        return Pelanggan::whereId($id)->update($data);
    }

    public function store($data)
    {
        $resp = Pelanggan::create($data);
        return $resp->id;
    }

    public function destroy($id)
    {
        Pelanggan::whereId($id)->delete();
    }
}
