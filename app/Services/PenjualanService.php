<?php

namespace App\Services;

use App\Repositories\BarangRepository;
use App\Repositories\ItemPenjualanRepository;
use App\Repositories\PelangganRepository;
use App\Repositories\PenjualanRepository;

class PenjualanService
{

    protected $penjualanService;
    protected $pelangganRepository;
    protected $itemPenjualanRepository;
    protected $barangRepository;

    public function __construct(PenjualanRepository $penjualanService, BarangRepository $barangRepository, PelangganRepository $pelangganRepository, ItemPenjualanRepository $itemPenjualanRepository)
    {
        $this->penjualanService = $penjualanService;
        $this->pelangganRepository = $pelangganRepository;
        $this->itemPenjualanRepository = $itemPenjualanRepository;
        $this->barangRepository = $barangRepository;
    }

    public function getData($request)
    {
        return $this->penjualanService->getPenjualan($request->all())->get();
    }

    public function store($request)
    {
        $payloadPlnggan = [
            'id_pelanggan' => $request->id_pelanggan
        ];
        // dd($request->kode_barang);
        $pelanggan =  $this->pelangganRepository->getPelanggan($payloadPlnggan)->first();
        $payload = [
            'id_nota' => $request->id_nota,
            'tgl' => $request->tgl,
            'kode_pelanggan' => $request->kode_pelanggan,
            'pelanggan_id' => $pelanggan->id,
            'subtotal' => $request->subtotal
        ];
        $id = $this->penjualanService->store($payload);
        foreach ($request->kode_barang as $row) {
            $payloadBrng = [
                'kode' => $row
            ];
            $brng = $this->barangRepository->getBarang($payloadBrng)->first();
            $payloadItemPenjualan = [
                'nota' => $request->id_nota,
                'nota_id' => $id,
                'kode_barang' => $brng->kode,
                'barang_id' => $brng->id,
                'qty' => 1,
            ];

            $this->itemPenjualanRepository->store($payloadItemPenjualan);
        }
    }

    public function update($request)
    {
        $payloadPlnggan = [
            'id_pelanggan' => $request->id_pelanggan
        ];
        // dd($request->kode_barang);
        $pelanggan =  $this->pelangganRepository->getPelanggan($payloadPlnggan)->first();
        $payload = [
            'id_nota' => $request->id_nota,
            'tgl' => $request->tgl,
            'kode_pelanggan' => $request->kode_pelanggan,
            'pelanggan_id' => $pelanggan->id,
            'subtotal' => $request->subtotal
        ];
        $this->penjualanService->update($request->id, $payload);
        $this->itemPenjualanRepository->destroyByNotaId($request->id);
        foreach ($request->kode_barang as $row) {
            $payloadBrng = [
                'kode' => $row
            ];
            $brng = $this->barangRepository->getBarang($payloadBrng)->first();
            $payloadItemPenjualan = [
                'nota' => $request->id_nota,
                'nota_id' => $request->id,
                'kode_barang' => $brng->kode,
                'barang_id' => $brng->id,
                'qty' => 1,
            ];

            $this->itemPenjualanRepository->store($payloadItemPenjualan);
        }
    }

    public function delete($request)
    {
        $payload = [
            'nota_id' => $request->id
        ];
        $data = $this->itemPenjualanRepository->getItemPenjualan($payload)->get();
        foreach ($data as $row) {
            $this->itemPenjualanRepository->destroy($row->id);
        }
        $this->penjualanService->destroy($request->id);
    }
}
