<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mos = Job::all();
        return view('jobs')->with('mos',$mos);
    }

    public function index_it(Request $request)
    {
        $mos = Job::all()->where('catagory','IT & Telecommunication');
        return view('jobs')->with('mos',$mos);
    }

     public function index_engineer(Request $request)
    {
        $mos = Job::all()->where('catagory','Engineer/Architects');
        return view('jobs')->with('mos',$mos);
    }
    public function index_accounting(Request $request)
    {
        $mos = Job::all()->where('catagory','Accounting/Finance');
        return view('jobs')->with('mos',$mos);
    }

     public function index_bank(Request $request)
    {
        $mos = Job::all()->where('catagory','Bank/ Non-Bank Fin. Institution');
        return view('jobs')->with('mos',$mos);
    }

     public function index_commercial(Request $request)
    {
        $mos = Job::all()->where('catagory','Commercial/Supply Chain');
        return view('jobs')->with('mos',$mos);
    }
    
     public function index_education(Request $request)
    {
        $mos = Job::all()->where('catagory','Education/Training');
        return view('jobs')->with('mos',$mos);
    }
     
    public function index_garments(Request $request)
    {
        $mos = Job::all()->where('catagory','Garments/Textile');
        return view('jobs')->with('mos',$mos);
    }

      public function index_hr(Request $request)
    {
        $mos = Job::all()->where('catagory','HR/Org. Development');
        return view('jobs')->with('mos',$mos);
    }

     public function index_admin(Request $request)
    {
        $mos = Job::all()->where('catagory','Gen Mgt/Admin');
        return view('jobs')->with('mos',$mos);
    }

     public function index_design(Request $request)
    {
        $mos = Job::all()->where('catagory','Design/Creative');
        return view('jobs')->with('mos',$mos);
    }

    public function index_travel(Request $request)
    {
        $mos = Job::all()->where('catagory','Hospitality/ Travel/ Tourism');
        return view('jobs')->with('mos',$mos);
    }

     public function index_beauty(Request $request)
    {
        $mos = Job::all()->where('catagory','Beauty Care/ Health & Fitness');
        return view('jobs')->with('mos',$mos);
    }

      public function index_electrician(Request $request)
    {
        $mos = Job::all()->where('catagory','Electrician/ Construction/ Repair');
        return view('jobs')->with('mos',$mos);
    }

     public function index_marketing(Request $request)
    {
        $mos = Job::all()->where('catagory','Marketing/Sales');
        return view('jobs')->with('mos',$mos);
    }


     public function index_customer(Request $request)
    {
        $mos = Job::all()->where('catagory','Customer Support/Call Centre');
        return view('jobs')->with('mos',$mos);
    }

     public function index_media(Request $request)
    {
        $mos = Job::all()->where('catagory','Media/Ad./Event Mgt.');
        return view('jobs')->with('mos',$mos);
    }


    public function index_medical(Request $request)
    {
        $mos = Job::all()->where('catagory','Medical/Pharma');
        return view('jobs')->with('mos',$mos);
    }

     public function index_agro(Request $request)
    {
        $mos = Job::all()->where('catagory','Agro (Plant/Animal/Fisheries)');
        return view('jobs')->with('mos',$mos);
    }

      public function index_ngo(Request $request)
    {
        $mos = Job::all()->where('catagory','NGO/Development');
        return view('jobs')->with('mos',$mos);
    }

      public function index_research(Request $request)
    {
        $mos = Job::all()->where('catagory','Research/Consultancy');
        return view('jobs')->with('mos',$mos);
    }

     public function index_secretary(Request $request)
    {
        $mos = Job::all()->where('catagory','Secretary/Receptionist');
        return view('jobs')->with('mos',$mos);
    }

      public function index_driving(Request $request)
    {
        $mos = Job::all()->where('catagory','Driving/Motor Technician');
        return view('jobs')->with('mos',$mos);
    }

      public function index_security(Request $request)
    {
        $mos = Job::all()->where('catagory','Security/Support Service');
        return view('jobs')->with('mos',$mos);
    }

       public function index_law(Request $request)
    {
        $mos = Job::all()->where('catagory','Law/Legal');
        return view('jobs')->with('mos',$mos);
    }






























    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job/insert_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_job = new Job;
        $new_job->name = $request->name;
        $new_job->contact = $request->contact;
        $new_job->email = $request->email;
        $new_job->catagory = $request->catagory;
        $new_job->salary = $request->salary;
        $new_job->save();
        
        return redirect()->route('insert_job');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
