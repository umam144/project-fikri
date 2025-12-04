<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tanah;
use App\Models\Bangunan;
use App\Models\Ruangan;
use App\Models\Kategori;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'total_users'     => User::count(),
            'total_tanah'     => Tanah::count(),
            'total_bangunan'  => Bangunan::count(),
            'total_ruangan'   => Ruangan::count(),
            'total_kategori'  => Kategori::count(),
            'total_barang'    => Barang::count(),
        ]);
    }
}
