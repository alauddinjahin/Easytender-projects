<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class ClientDashboardApiController extends Controller
{
    public function getTender(Request $request)
    {
        $tender = Tender::find($request->tender_id);
        return response()->json($tender);
    }

    public function getBiddedUsers(Request $request)
    {
        $tender = Tender::find($request->tender_id);
        return response()->json($tender);
    }
    
}
