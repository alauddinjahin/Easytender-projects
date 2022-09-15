<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Tender;
use App\Models\TenderItem;
use Illuminate\Support\Str;
use App\Models\TenderMethod;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TenderController extends Controller
{

    public function store(Request $request)
    {
        $request->validate(Tender::$rules);
        try {
            DB::beginTransaction();
            $tender_method = TenderMethod::find($request->tender_method);
            $tender = Tender::create([
                'vat_id'            => implode(", ", $request->vat_id),
                'tender_method_id'  => $tender_method->id,
                'tender_method'     => $tender_method->short_name,
                'last_selling_date' => $request->last_selling_date,
                'total_charge'      => $request->total_charge,
                'status'            => $request->status,
                'created_by'        => Auth::user()->id,
            ]);
            $batch_id = date('ymd') . str_pad($tender->id, 4, 0, STR_PAD_LEFT);
            Tender::where('id', $tender->id)->update(['batch_id'=>$batch_id]);

            foreach ($request->vat_id as $key => $value) {
                TenderItem::create([
                    'tender_id'      => $tender->id,
                    'batch_id'       => $batch_id,
                    'vat_id'         => $value,
                    'service_charge' => $request->service_charge,
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success','Tender created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
    }


    public function applyJob($id)
    {
        try {
            $tender = Tender::find($id);
            $bid_is_exist =  Bid::where('tender_id',$id)->where('freelancr_id',Auth::user()->id)->first();
            
            if (!is_null($bid_is_exist)) 
                throw new Exception("You are already bided", 404);
            
            $bid = Bid::create([
                'client_id'=> $tender->created_by,
                'freelancr_id'=> Auth::user()->id,
                'tender_id'=> $id,
                'is_approve'=> 0,
            ]);
            return redirect()->back()->with('success', 'Bid Successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function upload_file_to_freelancer(Request $request)
    {
        dd($request->all());
    }
}
