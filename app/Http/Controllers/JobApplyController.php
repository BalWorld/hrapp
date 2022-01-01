<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApply;
use Yajra\DataTables\DataTables;
use File;

class JobApplyController extends Controller
{
    public function getServerSide(Request $request)
    {
         if ($request->ajax()) {
            $jobapply = JobApply::select('*');
            return Datatables::of($jobapply)->make(true);
         }

        return view('jobapply');
    }

    public function index()
    {
        $jobapply = JobApply::all();
        return view('jobapply', ['jobapply' => $jobapply]);
    }

    public function store(Request $request)
    {
        $jobapply = new JobApply();

        $jobapply->created_by = '0';
        $jobapply->created_by_name = 'External Application';
        $jobapply->applied_jobid = request('jobid');

        
        $jobapply->name = request('name');
        $jobapply->email = request('email');
        $jobapply->phone = request('phone');
        $jobapply->sphone = request('sphone');
        
        $jobapply->primary_technology = request('primary_technology');
        $jobapply->secondary_skills = request('secondary_skills');

        $jobapply->location = request('location');
        $jobapply->ctc = request('ctc');
        $jobapply->expected_ctc = request('expected_ctc');
        $jobapply->notice_period = request('notice_period');
        $jobapply->notice_period_buyable = request('notice_period_buyable');
        $jobapply->current_organisation = request('current_organisation');
        
        $jobapply->dob = request('dob');
        $jobapply->totalexp = request('totalexp');
        $jobapply->relexp = request('relexp');
        $jobapply->positiontype = request('positiontype');
        $jobapply->relocate = request('relocate');
        $jobapply->qualification = request('qualification');
        $jobapply->communication = request('communication');

        $jobapply->status = 'Not Contacted';


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/jobapply/', $filename);
            $jobapply->file = $filename;
        } else {
            return $request;
            $jobapply->resume='';
        }

        $jobapply->save();
        return '<script type="text/javascript">alert("Job Applied Successfully. Returning Back");window.history.back();</script>';
        
    }

    public function destroy($id) {
        $jobapply = JobApply::findOrFail( $id );
        //File Delete
        $filename = $jobapply->file;
        if(\File::exists(public_path('/uploads/jobapply/'.$filename))){
        \File::delete(public_path('/uploads/jobapply/'.$filename));
        }else{
        return redirect('/jobapplications')->withMessage("File Doesnt exist! ".$filename);
        } //File Delete

        $jobapply->delete();

        return redirect('/jobapplications')->withMessage("Job Application Deleted Successfully");
    }

    public function status(Request $req) {
            
        $jobapply = JobApply::find($req->id);
        $jobapply->status = $req->status;
        $jobapply->save();
        return redirect('/jobapplications');
    }

    public function show($id) {
        $jobapply = JobApply::findOrFail($id);

        return view('jobapply_view', ['jobresponse' => $jobapply]);
    }
}
