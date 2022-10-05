<?php

namespace App\Services;

use App\Repositories\ItemPenjualanRepository;
class ItemPenjualanService
{

    protected $itemPenjualanRepo;

    public function __construct(ItemPenjualanRepository $itemPenjualanRepo)
    {
        $this->itemPenjualanRepo = $itemPenjualanRepo;
    }

    public function getData($request)
    {
        return $this->itemPenjualanRepo->getItemPenjualan($request->all())->get();
    }

    public function store($request)
    {
        return $this->itemPenjualanRepo->store($request->all());
    }

    public function update($request)
    {
        $id = $request->id;
        unset($request->id);
        $this->itemPenjualanRepo->update($id, $request->all());
    }

    public function delete($request)
    {
        $this->itemPenjualanRepo->destroy($request->id);
    }
}
