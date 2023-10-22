<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Web extends Controller
{
    public function index()
    {
        //data yang akakn ditampilkan ke tampilan
        return view('v_index', [
            'judul' => 'Halaman Depan'
        ]);
    }

    public function about()
    {
        return view('v_about', [
            'judul' => 'Halaman About'
        ]);
    }
}
