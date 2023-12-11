<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlobleController extends Controller
{
    public function CountryCanada()
    {
        return view('web.country.index',[
            'title'=>'Canada',
            'breadcrumb' => array(['title' => 'Canada', 'link' => ""])
        ]);
    }
}
