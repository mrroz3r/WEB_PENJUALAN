<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function save_distributor(Request $r)
    {
    	$distributor = new \App\Distributor();
    	$distributor->NamaDistributor = $r->input('NamaDistributor');
        $distributor->IDDistributor = str_random(5);
    	$distributor->Alamat = $r->input('Alamat');
    	$distributor->KotaAsal = $r->input('KotaAsal');
    	$distributor->Email = $r->input('Email');
    	$distributor->Telepon = $r->input('Telepon');
    	$distributor->save();

    	return redirect()->back();
    }

    public function save_petugas(Request $r)
    {
    	$petugas = \App\Petugas();
        $petugas->NamaPetugas = $r->input('NamaPetugas');
        $petugas->Alamat = $r->input('Alamat');
        $petugas->Email = $r->input('Email');
        $petugas->Telepon = $r->input('telepon');
        $petugas->save();

        return redirect()->back();
    }
}