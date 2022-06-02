<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Controller Coba method index';
    }

    public function about($nama = '', $umur = 0)
    {
        echo "Nama saya $nama Rohman, saya berumur $umur tahun";
    }
}
