<?php

namespace App\Http\Controllers;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        //
    }
}
