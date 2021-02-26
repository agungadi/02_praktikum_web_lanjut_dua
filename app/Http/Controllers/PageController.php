<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM : 2041723002 </br> Nama : Agung Adi Saputra';
    }

    public function articles($id)
    {
        return 'Halaman artikel '.$id;
    }

}
