<?php

namespace App\Services;

use App\Repositories\PelangganRepository;

class PelangganService
{

    protected $pelangganRepo;

    public function __construct(PelangganRepository $pelangganRepo)
    {
        $this->pelangganRepo = $pelangganRepo;
    }

    public function getData($request)
    {
        return $this->pelangganRepo->getPelanggan($request->all())->get();
    }

    public function store($request)
    {
        return $this->pelangganRepo->store($request->all());
    }

    public function update($request)
    {
        $payload = [
            'id_pelanggan' => $request->id_pelanggan,
            'nama' => $request->nama,
            'domisili' => $request->domisili,
            'jenis_kelamin' => $request->jenis_kelamin
        ];
        $this->pelangganRepo->update($request->id, $payload);
    }

    public function delete($request)
    {
        $this->pelangganRepo->destroy($request->id);
    }
}
