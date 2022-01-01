<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Yajra\DataTables\DataTables;

class JobController extends Controller
{

    public function getServerSide(Request $request)
    {
         if ($request->ajax()) {
            $jobs = Job::select('*');
            return Datatables::of($jobs)->make(true);
         }

        return view('bw_jobs_all');
    }
    
    public function index() {
        $ajobs = Job::all();
    
    return view('bw_jobs_all', ['jobs' => $ajobs]);
    
    }
    public function career() {
        $ajobs = Job::orderBy('id', 'desc')->get();
    
    return view('main/careers', ['jobs' => $ajobs]);
    
    }

    public function show($id) {
        $job = Job::findOrFail($id);

        return view('bw_jobs_single', ['job' => $job]);
    }


    public function destroy($id) {
            $job = Job::findOrFail($id);
            $job->delete();

            return redirect('/jobs')->withMessage("Job Deleted Successfully");;
    }


    public function store() {
        $s_jobs = new Job();

        $s_jobs->created_by = request('created_by');
        $s_jobs->created_by_name = request('created_by_name');

        $s_jobs->bw_job_name = request('jobname');
        $s_jobs->bw_job_title = request('jobtitle');
        $s_jobs->bw_job_description = request('jobdesc');
        $s_jobs->bw_job_pskills = request('jobskills');
        $s_jobs->bw_job_sskills = request('secondaryskills');
        $s_jobs->bw_job_oskills = request('optionalskills');
        $s_jobs->bw_job_location = request('location');
        $s_jobs->bw_job_exp = request('exp');
        $s_jobs->bw_job_minsal = request('minsalary');
        $s_jobs->bw_job_maxsal = request('maxsalary');
        $s_jobs->bw_job_type = request('jobtype');
        $s_jobs->bw_job_wlocation = request('wlocation');


        $s_jobs->save();

        return '<script type="text/javascript">alert("Job Added");window.location = "/jobs"; </script>';
    }

}
