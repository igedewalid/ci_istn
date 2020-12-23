<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {

        echo view('pages/home');
    }

    public function proker()
    {
        echo view('pages/proker');
    }
    //--------------------------------------------------------------------

    public function club()
    {
        echo view('pages/club');
    }

    public function prestasi()
    {
        echo view('pages/prestasi');
    }

    public function kontak()
    {
        echo view('pages/kontak');
    }
}
