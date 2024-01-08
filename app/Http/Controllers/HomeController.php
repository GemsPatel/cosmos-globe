<?php

namespace App\Http\Controllers;

use App\Models\Admin\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $websiteDetails = "";
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->websiteDetails = getHeaderInformation();
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $headerInfo = $this->websiteDetails;
        $testimonials = Sliders::where('status','1')->get();
        return view('front.'.$this->websiteDetails->slug.'.index', compact('headerInfo','testimonials' ));
    }
}
