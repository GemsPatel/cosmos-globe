<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessVisaController extends Controller
{
    public function index()
    {

        return view('web.visa.businessVisa',[
            'title'=>'Business Visa',
            'breadcrumb' => array(['title' => 'Business Visa', 'link' => ""])
        ]);
    }
}
