<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Profile;
use App\Models\Tender;
use App\Models\TenderMethod;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->usertype === 'admin'){
            return redirect('/admin');
        }elseif(auth()->user()->usertype==='client'){
            return redirect('/client');
        }elseif (auth()->user()->usertype === 'freelancer') {
            return redirect('/freelancer');
        }else{
            return redirect()->back()->with('error', 'somthing is wrong');
        }
    }

    public function adminDashboard()
    {
        return view('backend.admindashboard');
    }

    public function clientDashboard()
    {
        $client_profile = Profile::firstWhere('user_id', Auth::user()->id);
        $tender_methods = TenderMethod::all();
        $all_tender =Tender::where('created_by',Auth::user()->id)->get();
        return view('frontend.pages.myaccount.client-dashboard', compact('client_profile','tender_methods','all_tender'));
    }

    public function freelancerDashboard()
    {
        $freelancer_profile = Profile::firstWhere('user_id', Auth::user()->id);
        $my_jobs = Bid::join('tenders','tenders.id','bids.tender_id')
                        ->join('users','users.id','tenders.created_by')
                        ->selectRaw('
                            tenders.id as tender_id,
                            tenders.batch_id,
                            tenders.vat_id,
                            tenders.tender_method,
                            tenders.last_selling_date,
                            tenders.total_charge,
                            tenders.status,
                            tenders.created_by as client_name,
                            bids.id as bid_id,
                            bids.is_approve,
                            users.name as client_name
                        ')
                        ->where('bids.freelancr_id',Auth::user()->id)
                        ->get();
                        // dd($my_jobs);
        return view('frontend.pages.myaccount.freelancer-dashboard',compact('freelancer_profile','my_jobs'));
    }

    public function start_job($id)
    {
        $start_job = Tender::find($id)->update(['status'=>'processing']);
        return redirect()->route('freelancer.dashboard')->with('success','Job Started successfully');
    }
    public function getTenderById(Request $request)
    {
        dd($request->all());
    }
}
