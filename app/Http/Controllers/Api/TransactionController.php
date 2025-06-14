<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TransactionModel;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Menampilkan semua data transaksi dengan relasi barang
        $transactions = TransactionModel::with(['penjualan', 'barang'])->get();

        return response()->json([
            'success' => true,
            'data' => $transactions
        ]);
    }
}