<?php

namespace App\Controllers;

use App\Models\m_main;

class c_main extends BaseController
{
    public function display()
    {
        $data['content_view'] = "pages/v_main.php";
        return view('layout/v_template', $data);
    }
    
    public function loker()
    {
        $data['content_view'] = "pages/v_loker.php";
        return view('layout/v_template', $data);
    }

    public function card()
    {
        $data['content_view'] = "pages/v_card.php";
        return view('layout/v_template', $data);
    }

    public function save()
    {
        $data['content_view'] = "pages/v_simpan.php";
        return view('layout/v_template', $data);
    }
}
