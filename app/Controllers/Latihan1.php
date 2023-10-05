<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat datang.. selamat belajar Web Programming";
        // $this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2) // Perbaikan: Parameter seharusnya dalam tanda kurung ()
    {
        return view('view-latihan', [
            "nilai1" => $n1,
            "nilai2" => $n2,
            "total" => $n1 + $n2
        ]);
    }
}
