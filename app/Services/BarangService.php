<?php

namespace App\Services;

use App\Repositories\BarangRepository;

class BarangService
{

    protected $barangRepository;

    public function __construct(BarangRepository $barangRepository)
    {
        $this->barangRepository = $barangRepository;
    }

    public function getData($request)
    {
        return $this->barangRepository->getBarang($request->all())->get();
    }

    public function store($request)
    {
        $this->barangRepository->store($request->all());
    }

    public function update($request)
    {
        $id = $request->id;
        unset($request->id);
        $this->barangRepository->update($id, $request->all());
    }

    public function destroy($request)
    {
        $this->barangRepository->destroy($request->id);
    }
}
