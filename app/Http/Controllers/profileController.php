<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class profileController extends Controller
{
   public function profile($nama = "", $kelas = "", $npm = ""){

   $data = [
'nama' => $nama,
'kelas' => $kelas,
'npm' => $npm,
];

    return view('profile', $data);

   }
}