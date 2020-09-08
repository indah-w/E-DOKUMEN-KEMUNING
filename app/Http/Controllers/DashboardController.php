<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function grafik()
    {
        return view('dashboard.grafik');
    }

    public function data()
    {
        $jumlahRumahTetap = Member::where('status_rumah', 'tetap')->count();
        $jumlahRumahTidakTetap = Member::where('status_rumah', 'tidak tetap')->count();
        $jumlahAnak = Member::all()->sum('jumlah_anak');
        $jumlahMemilikiTempatSampah = Member::where('memiliki_tempat_sampah', 'ya')->count();
        $jumlahBiopori = Member::all()->sum('jumlah_biopori');
        $jumlahAnggotaBankSampah = Member::where('anggota_bank_sampah', 'ya')->count();
        $jumlahKepalaKeluarga = Member::all()->groupBy('nama_kartu_keluarga')->count();

        $data = [
            [
                'label' => 'Rumah Tetap',
                'y' => $jumlahRumahTetap
            ],
            [
                'label' => 'Rumah Tidak Tetap',
                'y' => $jumlahRumahTidakTetap
            ],
            [
                'label' => 'Jumlah Anak',
                'y' => $jumlahAnak
            ],
            [
                'label' => 'Memiliki Tempat Sampah',
                'y' => $jumlahMemilikiTempatSampah
            ],
            [
                'label' => 'Jumlah Biopori',
                'y' => $jumlahBiopori
            ],
            [
                'label' => 'Anggota Bank Sampah',
                'y' => $jumlahAnggotaBankSampah
            ],
            [
                'label' => 'Kepala Keluarga',
                'y' => $jumlahKepalaKeluarga
            ],
        ];

        return json_encode($data);
    }
}
