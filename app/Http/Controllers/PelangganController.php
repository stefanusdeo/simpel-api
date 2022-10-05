<?php

namespace App\Http\Controllers;

use App\Services\PelangganService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    protected $pelangganService;

    public function __construct(PelangganService $pelangganService)
    {
        $this->pelangganService = $pelangganService;
    }

    public function getData(Request $request)
    {
        return $this->pelangganService->getData($request);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->pelangganService->store($request);

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

            $this->pelangganService->update($request);

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

            $this->pelangganService->delete($request);

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
