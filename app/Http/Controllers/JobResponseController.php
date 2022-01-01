<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobResponse;
use Yajra\DataTables\DataTables;

class JobResponseController extends Controller
{

    public function getServerSide(Request $request)
    {
         if ($request->ajax()) {
            $jobresponse = JobResponse::select('*');
            return Datatables::of($jobresponse)->make(true);
         }

        return view('bw_responses_all');
    }
    public function index()
    {
        $aresponses = JobResponse::all();
        return view('bw_responses_all', ['responses' => $aresponses]);
    }
    
    public function upload()
    {
        return view('bw_response');
    }

    public function uploadFile(Request $req)
    {
        $req->file->store('public/resumes');
        return "fileupload Success";
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'unique:jobresponses|digits:10'
        ],
        [
            'phone.unique' => 'Failed! Phone Number was already in Database.'
        ]);
        $input = $request->phone;

        $jobresponse = new JobResponse();

        $jobresponse->created_by = request('created_by');
        $jobresponse->created_by_name = request('created_by_name');

        
        $jobresponse->name = request('name');
        $jobresponse->email = request('email');
        $jobresponse->phone = $input;
        $jobresponse->sphone = request('sphone');
        
        $jobresponse->primary_technology = request('primary_technology');
        $jobresponse->secondary_skills = request('secondary_skills');

        $jobresponse->client = request('client');
        
        $jobresponse->location = request('location');
        $jobresponse->ctc = request('ctc');
        $jobresponse->expected_ctc = request('expected_ctc');
        $jobresponse->notice_period = request('notice_period');
        $jobresponse->notice_period_buyable = request('notice_period_buyable');
        $jobresponse->current_organisation = request('current_organisation');
        
        $jobresponse->dob = request('dob');
        $jobresponse->totalexp = request('totalexp');
        $jobresponse->relexp = request('relexp');
        $jobresponse->positiontype = request('positiontype');
        $jobresponse->relocate = request('relocate');
        $jobresponse->qualification = request('qualification');
        $jobresponse->communication = request('communication');

        $jobresponse->status = 'Not Contacted';


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/jobresponse/', $filename);
            $jobresponse->file = $filename;
        } else {
            return $request;
            $jobresponse->resume='';
        }

        $jobresponse->save();
        return '<script type="text/javascript">alert("Resume Added");window.location = "/resumes"; </script>';
        
    }
    
    public function show($id) {
        $jobresponse = JobResponse::findOrFail($id);

        return view('bw_response_single', ['jobresponse' => $jobresponse]);
    }
    
    public function edit($id) {
        $jobresponse = JobResponse::findOrFail($id);

        return view('bw_response_edit', ['jobresponse' => $jobresponse]);
    }
    
    public function destroy($id) {
        $jobresponse = JobResponse::findOrFail( $id );
        $jobresponse->delete();

        return redirect('/resumes')->withMessage("Resume Deleted Successfully");
        //return '<script type="text/javascript">alert("Resume Deleted!");window.location = "/resumes"; </script>';
    }

    public function status(Request $req) {
            
        $jobresponse = JobResponse::find($req->id);

        $jobresponse->status = $req->status;
            
        $jobresponse->save();
        return redirect('/resumes');
    }
    
    public function update(Request $req) {
            
            $jobresponse = JobResponse::find($req->id);
            
            $jobresponse->name =  $req->name;

            $jobresponse->email = $req->email;
            $jobresponse->phone = $req->phone;
            $jobresponse->sphone = $req->sphone;
            
            $jobresponse->primary_technology = $req->primary_technology;
            $jobresponse->secondary_skills = $req->secondary_skills;

            $jobresponse->client = $req->client;
            
            $jobresponse->location = $req->location;
            $jobresponse->ctc = $req->ctc;
            $jobresponse->expected_ctc = $req->expected_ctc;
            $jobresponse->notice_period = $req->notice_period;
            $jobresponse->notice_period_buyable = $req->notice_period_buyable;
            $jobresponse->current_organisation = $req->current_organisation;
            
            $jobresponse->dob = $req->dob;
            $jobresponse->totalexp = $req->totalexp;
            $jobresponse->relexp = $req->relexp;
            $jobresponse->positiontype = $req->positiontype;
            $jobresponse->relocate = $req->relocate;
            $jobresponse->qualification = $req->qualification;
            $jobresponse->communication = $req->communication;


            $jobresponse->save();
            return redirect('/resumes');
            //
    }
}
