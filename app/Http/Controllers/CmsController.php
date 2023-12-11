<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function businessVisa()
    {

        return view('web.visa.businessVisa',[
            'title'=>'Business Visa',
            'breadcrumb' => array(['title' => 'Business Visa', 'link' => ""])
        ]);
    }
    public function contactUs()
    {
        return view('web.CMS.contactUs',[
            'title'=>'Contact Us',
            'breadcrumb' => array(['title' => 'Contact Us', 'link' => ""])
        ]);
    }
    public function aboutUs()
    {
        return view('web.CMS.aboutUs',[
            'title'=>'About Us',
            'breadcrumb' => array(['title' => 'About Us', 'link' => ""])
        ]);
    }

    public function gallery()
    {
        return view('web.CMS.gallery',[
            'title'=>'Gallery',
            'breadcrumb' => array(['title' => 'Gallery', 'link' => ""])
        ]);
    }

    public function faqs()
    {
        return view('web.CMS.faqs',[
            'title'=>"FAQs",
            'breadcrumb' => array(['title' => "FAQs", 'link' => ""])
        ]);
    }
}
