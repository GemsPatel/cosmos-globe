<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public $websiteDetails = "";
    
    function __construct()
    {
        $this->websiteDetails = getHeaderInformation();
    }

    public function contactUs()
    {
        return view('front.'.$this->websiteDetails->slug.'.CMS.contactUs',[
            'title'=>'Contact Us',
            'breadcrumb' => array(['title' => 'Contact Us', 'link' => ""]),
            'headerInfo' => $this->websiteDetails,
        ]);
    }
    public function aboutUs()
    {
        $headerInfo = $this->websiteDetails;
        return view('front.'.$this->websiteDetails->slug.'.CMS.aboutUs',[
            'title'=>'About Us',
            'breadcrumb' => array(['title' => 'About Us', 'link' => ""]),
            'headerInfo' => $this->websiteDetails,
        ]);
    }

    public function gallery()
    {
        return view('front.'.$this->websiteDetails->slug.'.CMS.gallery',[
            'title'=>'Gallery',
            'breadcrumb' => array(['title' => 'Gallery', 'link' => ""]),
            'headerInfo' => $this->websiteDetails,
        ]);
    }

    public function faqs()
    {
        return view('front.'.$this->websiteDetails->slug.'.CMS.faqs',[
            'title'=>"FAQs",
            'breadcrumb' => array(['title' => "FAQs", 'link' => ""]),
            'headerInfo' => $this->websiteDetails,
        ]);
    }
}
