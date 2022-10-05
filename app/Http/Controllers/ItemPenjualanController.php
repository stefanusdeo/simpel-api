<?php

namespace App\Http\Controllers;

use App\Services\ItemPenjualanService;
use App\Services\penjualanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemPenjualanController extends Controller
{
    protected $itemPenjualanRepo;

    public function __construct(ItemPenjualanService $itemPenjualanRepo)
    {
        $this->itemPenjualanRepo = $itemPenjualanRepo;
    }

    public function getData(Request $request)
    {
        return $this->itemPenjualanRepo->getData($request);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->itemPenjualanRepo->store($request);

            DB::commit();
            return response([
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'success' => false,
                'message' => $e->getMessage()
            ], 401);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->itemPenjualanRepo->update($request);

            DB::commit();
            return response([
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'success' => false,
                'message' => $e->getMessage()
            ], 401);
        }
    }

    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->itemPenjualanRepo->delete($request);

            DB::commit();
            return response([
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'success' => false,
                'message' => $e->getMessage()
            ], 401);
        }
    }
}
