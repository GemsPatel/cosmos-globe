<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CMs;
use Illuminate\Http\Request;
use Image;

class CMSController extends Controller
{
    public $websiteDetails = "";
    /**
     * @Function:        <__construct>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Create a new controller instance.>
     * @return void
     */
    public function __construct()
    {
        $this->websiteDetails = getHeaderInformation();
        // $this->middleware('admin');
    }

    /**
     * @Function:        <index>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headerInfo = $this->websiteDetails;
        $dataArr = CMs::orderBy( 'id', 'desc' )
                    ->where([
                        'website_id' => $headerInfo->id
                    ])
                    ->get();
        return view('admin.cms.index', compact('dataArr', 'headerInfo'));
    }

    /**
     * @Function:        <create>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $headerInfo = $this->websiteDetails;
        return view('admin.cms.create', compact('headerInfo') );
    }

    /**
     * @Function:        <store>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:1|max:256',
            'description' => 'required',
        ]);

		$cms = new Cms();

        $path = "";
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('cms', $filename, 'public' );
			$path = "public/cms/".$filename;
        }

        $slug = rtrim( convertStringToSlug( $request->title ), "-" );
        $cms->user_id = auth()->guard('admin')->user()->id;
        $cms->website_id = $this->websiteDetails->id;
        $cms->title = $request->title;
        $cms->slug = $slug;
		$cms->image = $path;
        $cms->description = $request->description;
        $cms->status = $request->status;
		$cms->save();
		
        $request->session()->flash('message', 'CMS successfully created');
        return redirect()->route('admin.cms');
    }

    /**
     * @Function:        <show>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = CMs::with('user')->with('status')->find($id);
        return view('admin.cms.show', [ 'note' => $note ]);
    }

    /**
     * @Function:        <edit>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ){
        $headerInfo = $this->websiteDetails;
        $dataArr = CMs::find($id);
        return view('admin.cms.edit', compact( 'dataArr'));
    }

    /**
     * @Function:        <update>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:1|max:256',
            'description' => 'required',
        ]);

        $cms = CMs::find($id);
        if ($request->hasFile('image')) {
			$filename = $request->image->getClientOriginalName();
            $request->image->storeAs('cms', $filename, 'public' );
			$cms->image = "public/cms/".$filename;
        }

        $cms->website_id = $this->websiteDetails->id;
        $cms->title = $request->title;
        $cms->description = $request->description;
        $cms->status = $request->status;
        $cms->save();

        $request->session()->flash('message', 'CMS successfully updated');
        return redirect()->route('admin.cms');
    }

    /**
     * @Function:        <destroy>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <14-12-2023>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = CMs::find($id);
        if($del){
            $del->delete();
        }

        return response()->json( ['data' => ['message' => 'CMS successfully deleted.' ] ], 200);
    }
}
