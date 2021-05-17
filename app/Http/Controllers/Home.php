<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
  public function index()
  {
    $data = [
      'kelas' => 'Kom C',
      'prodi' => 'Teknologi Informasi'
    ];
    return view('home', $data);
    }

    public function about()
    {
      return "Ini adalah halaman about";
    }
    public function mahasiswa()
    {
      return "Ini adalah halaman mahasiswa";
    }

}
