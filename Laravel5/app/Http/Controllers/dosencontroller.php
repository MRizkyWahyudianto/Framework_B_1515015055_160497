<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function dosen(){
     $dosen = dosen::All();
     foreach($dosen as $dsn){ 
     echo "Nama : ".$dsn->nama;  
     echo "<br>";
     echo "Username:".$dsn->pengguna->username;  
     echo "<br>";
     echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"; 
     echo "<br>";
    }}
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "RizkyKiwa";
    	$dosen->nip = "1515015055";
    	$dosen->alamat = "Sempaja";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
}