<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobResponse;
use App\User;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index() {
        $ajobs = Job::orderBy('id', 'desc')->skip(0)->take(5)->get();
        $aresponses = JobResponse::orderBy('id', 'desc')->skip(0)->take(5)->get();
    
    return view('bw_dashboard', ['jobs' => $ajobs,'responses' => $aresponses]);
    }

    public function userServerData(Request $request)
    {
         if ($request->ajax()) {
            $user = User::select('*');
            return Datatables::of($user)->make(true);
         }

        return view('users');
    }
}
