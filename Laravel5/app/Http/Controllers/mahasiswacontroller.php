<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
     public function mahasiswa(){
     $mahasiswa = Mahasiswa::All();
     foreach($mahasiswa as $mhs){ 
     echo "Nama : ".$mhs->nama;  
     echo "<br>";
     echo "Username:".$mhs->pengguna->username; 
     echo "<br>";
     echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"; 
     echo "<br>";
    }}
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Sugiono";
    	$mahasiswa->nim = "1515015055";
    	$mahasiswa->alamat = "Pemuda";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
