<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\Permission;
use App\Models\AdType;
use App\Models\GoogleAdvertisement;
use Illuminate\Http\Request;

class GoogleAdsController extends Controller
{
    public $websiteDetails = "";
    /**
     * @Function:        <__construct>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Create a new controller instance.>
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->websiteDetails = getHeaderInformation();
    }

    /**
     * @Function:        <index>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.g-ads.index', [ 'dataArr' => GoogleAdvertisement::with('adType')->where( ['website_id' => $this->websiteDetails->id ] )->get() ]);
    }

    /**
     * @Function:        <create>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.g-ads.create', [ 'dataArr' => AdType::all() ] );
    }

    /**
     * @Function:        <store>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
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
            'name' => 'required|min:1|max:50',
            'content' => 'required|min:1',
        ]);

        $data = new GoogleAdvertisement();
        $data->website_id = $this->websiteDetails->id;
        $data->ad_type_id = $request->ad_type_id;
        $data->name = $request->name;
        $data->content = $request->content;
        $data->status = $request->status;
        $data->save();

        $request->session()->flash('message', 'G-Ads successfully created.');
        return redirect()->route('admin.gads'); 
    }

    /**
     * @Function:        <show>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = AdminMenu::with('user')->with('status')->find($id);
        return view('admin.g-ads.show', [ 'note' => $note ]);
    }

    /**
     * @Function:        <edit>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ){
        return view('admin.g-ads.edit',['dataArr'  => GoogleAdvertisement::find($id), 'menuArr' => AdType::all() ]);
    }

    /**
     * @Function:        <update>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
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
            'name' => 'required|min:1|max:50',
            'content' => 'required|min:1',
        ]);

        $data = GoogleAdvertisement::find($id);
        $data->website_id = $this->websiteDetails->id;
        $data->ad_type_id = $request->ad_type_id;
        $data->name = $request->name;
        $data->content = $request->content;
        $data->status = $request->status;
        $data->save();
        $request->session()->flash('message', 'G-Ads successfully updated');
        return redirect()->route('admin.gads'); 
    }

    /**
     * @Function:        <destroy>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = GoogleAdvertisement::find($id);
        if($del){
            $del->delete();
        }
        return response()->json( ['data' => ['message' => 'G-Ads successfully deleted.' ] ], 200);
        // return redirect()->route('admin.gads');
    }
}
