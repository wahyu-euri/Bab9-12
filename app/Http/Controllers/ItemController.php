<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ItemController extends Controller
{
    public function __invoke(): Response
    {
        $arrMahasiswa = [
            "Risa Lestari",
            "Rudi Hermawan",
            "Bambang Kusumo",
            "Lisa Permata"
        ];

        return response()->view('mahasiswa',['mahasiswa' => $arrMahasiswa]);
    }
}
