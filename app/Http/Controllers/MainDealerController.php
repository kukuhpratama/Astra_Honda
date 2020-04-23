<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainDealerController extends Controller
{
    public function uploadH1()
    {
        return view('main_dealer.uploadH1');
    }

    public function uploadH2()
    {
        return view('main_dealer.uploadH2');
    }
}
