<?php

namespace App\Controllers;

class Utama extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Halaman Utama'
        ]);
    }

    public function antrian()
    {
        return view('antrian', [
            'title' => 'Halaman Antrian'
        ]);
    }

    public function loket()
    {
        return view('loket', [
            'title' => 'Halaman Loket'
        ]);
    }
} 