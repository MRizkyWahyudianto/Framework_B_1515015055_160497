<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal(){
    	return "Hello dari RuanganController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$ruangan = new Ruangan();
    	$ruangan->title = "Ruang Kelas 411B";
    	$ruangan->save();
    	return "Data Ruangan dengan Nama {$ruangan->title} telah disimpan";
}
}
