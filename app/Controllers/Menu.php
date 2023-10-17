<?php

namespace App\Controllers;

class Menu extends BaseController
{
    // P E G A W A I
    public function asn()
    {
        return view('menu/asn');
    }
    public function nonasn()
    {
        return view('menu/nonasn');
    }
    public function rekapitulasidata()
    {
        return view('menu/rekapitulasidata');
    }



    // R E C R U I T M E N T
    public function lowongan()
    {
        return view('menu/lowongan');
    }
    public function datapelamar()
    {
        return view('menu/datapelamar');
    }
    public function screening()
    {
        return view('menu/screening');
    }
    public function tahaplanjut()
    {
        return view('menu/tahaplanjut');
    }
    public function lolos()
    {
        return view('menu/lolos');
    }
    public function pengumuman()
    {
        return view('menu/pengumuman');
    }



    // P E L A T I H A N
    public function approval()
    {
        return view('menu/approval');
    }
    public function rekappelatihan()
    {
        return view('menu/rekappelatihan');
    }
    public function laporanpelatihan()
    {
        return view('menu/laporanpelatihan');
    }



    // K G B 
    public function datagapok()
    {
        return view('menu/datagapok');
    }
    public function daftarnominatif()
    {
        return view('menu/daftarnominatif');
    }
    public function nominatifmanual()
    {
        return view('menu/nominatifmanual');
    }
    public function nominatiftertunda()
    {
        return view('menu/nominatiftertunda');
    }
    public function riwayatkgb()
    {
        return view('menu/riwayatkgb');
    }



    // K P I
    public function list()
    {
        return view('menu/list');
    }
    public function karyawan()
    {
        return view('menu/karyawan');
    }



    // A N J A B
    public function anjab()
    {
        return view('menu/anjab');
    }
    public function reqacc()
    {
        return view('menu/reqacc');
    }
}