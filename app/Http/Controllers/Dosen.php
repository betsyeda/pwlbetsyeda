<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class Dosen extends Controller
{
    public function __construct()
    {
      $this->DosenModel = new DosenModel();
    }

    public function index()
    {
    /*  $data = [
        'dosen'=>$this->DosenModel->allData(),
     ];*/
     $nip0= "201401";
     $nama0= "Dikta";
     $matkul0= "Pemograman Dasar";

     $nip1= "201402";
     $nama1= "Bumi";
     $matkul1= "Kalkulus";

     $nip2= "201403";
     $nama2= "Sastra";
     $matkul2= "Matematika ";

      return view('dosen',['nip0'=>$nip0 , 'nama0'=>$nama0 , 'matkul0'=>$matkul0 ,
      'nip1'=>$nip1 , 'nama1'=>$nama1 , 'matkul1'=>$matkul1 ,
      'nip2'=>$nip2 , 'nama2'=>$nama2 , 'matkul2'=>$matkul2]);
      

    }
}
