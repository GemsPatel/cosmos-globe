<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousals;
use Illuminate\Http\Request;

class CarousalsController extends Controller
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
        return view('admin.carousals.index', [ 'dataArr' => Carousals::where( ['website_id' => $this->websiteDetails->id ] )->get() ]);
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
        return view('admin.carousals.create', [ ] );
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
            'title' => 'required|min:1|max:50',
            'image' => 'required',
            // 'short_description' => 'required',
            'description' => 'required',

        ]);

        $data = new Carousals();

        $path = "";
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('Carousals', $filename, 'public' );
			$path = "public/Carousals/".$filename;
        }

        $user_id = auth()->guard('admin')->user()->id;
        $data->user_id = $user_id;
        $data->website_id = $this->websiteDetails->id;
        $data->title = $request->title;
        $data->image = $path;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->keyword = $request->keyword;
        $data->status = $request->status;
        $data->save();

        $request->session()->flash('message', 'Carousals successfully created.');
        return redirect()->route('admin.Carousals'); 
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
        return view('admin.carousals.show', [ ]);
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
        return view('admin.carousals.edit',['dataArr'  => Carousals::find($id) ]);
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
            'title' => 'required|min:1|max:256',
            'category_id' => 'required',
            // 'sub_category_id' => 'required',
            'short_description' => 'required',
            // 'description' => 'required',
        ]);

        $data = Carousals::find($id);
        if ($request->hasFile('image')) {
			$filename = $request->image->getClientOriginalName();
            $request->image->storeAs('Carousals', $filename, 'public' );
        }

        $data->website_id = $this->websiteDetails->id;
        $data->title = $request->title;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
		$data->keyword = $request->keyword;
        $data->status = $request->status;
        $data->save();

        $request->session()->flash('message', 'Carousals successfully updated');
        return redirect()->route('admin.Carousals'); 
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
        $del = Carousals::find($id);
        if($del){
            $del->delete();
        }
        return response()->json( ['data' => ['message' => 'Carousals successfully deleted.' ] ], 200);
    }
}
