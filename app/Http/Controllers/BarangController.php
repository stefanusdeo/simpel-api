<?php

namespace App\Http\Controllers;

use App\Services\BarangService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    protected $barangService;

    public function __construct(BarangService $barangService)
    {
        $this->barangService = $barangService;
    }

    public function getData(Request $request)
    {
        return $this->barangService->getData($request);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->barangService->store($request);

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

            $this->barangService->update($request);

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

            $this->barangService->destroy($request);

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
