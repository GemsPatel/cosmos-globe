<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return view('web.country.index',[
            'title'=>'Canada',
            'breadcrumb' => array(['title' => 'Canada', 'link' => ""])
        ]);
    }
}
