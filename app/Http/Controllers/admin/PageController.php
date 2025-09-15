<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        $arrMahasiswa = [
            "Risa Lestari",
            "Rudi Hermawan",
            "Bambang Kusumo",
            "Lisa Permata"
        ];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobafacade()
    {
        echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
    }

    public function cobaclass()
    {
        echo $this -> bar();
    }
}
