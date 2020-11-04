<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {

        echo view('pages/about');
    }

    public function proker()
    {
        echo view('pages/proker');
    }
    //--------------------------------------------------------------------

}
