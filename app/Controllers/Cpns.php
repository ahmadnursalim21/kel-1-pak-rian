<?php

namespace App\Controllers;

class Cpns extends BaseController
{
    public function index(): string
    {
        return view('cpns/index');
    }
    public function daftar_formasi(): string
    {
        return view('cpns/daftar_formasi');
    }
    public function daftar_formasi_cpns_badan_pengawas_obat_dan_makanan(): string
    {
        return view('cpns/daftar_formasi_makanan');
    }
    public function daftar_formasi_cpns_s1_teknik_bangunan(): string
    {
        return view('cpns/daftar_formasi_cpns_s1_bangunan');
    }
}
