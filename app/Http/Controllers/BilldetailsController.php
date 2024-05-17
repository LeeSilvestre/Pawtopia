<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillDetails;

class BillDetailsController extends Controller
{
    public function createBillDetails(Request $request)
    {
        $data = $request->all();
        $billDetails = BillDetails::create($data);
        return response()->json($billDetails);
    }

    public function getBillDetailsById($id)
    {
        $billDetails = BillDetails::where('bill_id', $id)->get();
        return response()->json($billDetails);
    }
}
