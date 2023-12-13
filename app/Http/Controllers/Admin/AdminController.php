<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Analytics;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * @Function:        <__construct>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <24-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Create a new controller instance.>
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth:admin');
    }

    /**
     * @Function:        <dashboard>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <23-11-2021>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // Get the current date and time
        $now = Carbon::now();
        $sevenDaysAgo = $now->subDays(7);// Get the date 7 days ago from the current date
        $t30DaysAgo = $now->subDays(30);// Get the date 30 days ago from the current date
        $t365DaysAgo = $now->subDays(365);// Get the date 365 days ago from the current date

        $toDay = Analytics::where('created_at', '>=', $now )->get()->count();
        $last7Day = Analytics::where('created_at', '>=', $sevenDaysAgo )->get()->count();// Retrieve records from the last 7 days
        $last30Day = Analytics::where('created_at', '>=', $t30DaysAgo )->get()->count();// Retrieve records from the last 30 days
        $last365Day = Analytics::where('created_at', '>=', $t365DaysAgo )->get()->count();// Retrieve records from the last 365 days

        $toDayUnique = Analytics::where('created_at', '>=', $now )->get()->count();
        $last7DayUnique = Analytics::where('created_at', '>=', $sevenDaysAgo )->groupBy( 'ip' )->get()->count();// Retrieve records from the last 7 days
        $last30DayUnique = Analytics::where('created_at', '>=', $t30DaysAgo )->groupBy( 'ip' )->get()->count();// Retrieve records from the last 30 days
        $last365DayUnique = Analytics::where('created_at', '>=', $t365DaysAgo )->groupBy( 'ip' )->get()->count();// Retrieve records from the last 365 days

        return view('admin.dashboard.index', compact( 'toDay', 'last7Day', 'last30Day', 'last365Day', 'toDayUnique', 'last7DayUnique', 'last30DayUnique', 'last365DayUnique' ));
    }
}
