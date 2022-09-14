<?php

namespace App\Http\Controllers\Api;

use App\Models\Bid;
use App\Models\Tender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ClientDashboardApiController extends Controller
{
    public function getTender(Request $request)
    {
        $tender = Tender::find($request->tender_id);
        return response()->json($tender);
    }

    public function getBiddedUsers(Request $request)
    {
        $tender = Bid::join('users','users.id','bids.freelancr_id')
                    ->join('tenders','tenders.id','bids.tender_id')
                    ->selectRaw('
                        tenders.id as tender_id,
                        tenders.batch_id,
                        tenders.vat_id,
                        tenders.tender_method,
                        tenders.last_selling_date,
                        tenders.total_charge,
                        tenders.status,
                        users.name as freelancer_name,
                        users.phone,
                        bids.freelancr_id,
                        bids.is_approve
                    ')
                    ->where('tender_id',$request->tender_id)
                    ->get();
        return response()->json($tender);
    }
}
