<?php

namespace App\Http\Controllers;

use App\Services\penju;
use App\Services\PenjualanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    protected $penjualan;

    public function __construct(PenjualanService $penjualan)
    {
        $this->penjualan = $penjualan;
    }

    public function getData(Request $request)
    {
        return $this->penjualan->getData($request);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->penjualan->store($request);

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

            $this->penjualan->update($request);

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

            $this->penjualan->delete($request);

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
