<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillStatus;

class BillstatusController extends Controller
{
    public function showNewestStatusId()
    {
        $newestId = BillStatus::orderBy('bill_id', 'desc')->first();
        return response()->json($newestId);
    }

    public function createBillStatus(Request $request)
    {
        $data = $request->all();
        $billStatus = BillStatus::create($data);
        return response()->json($billStatus);
    }

    public function getAllBillsByUser($id)
    {
        $bills = BillStatus::where('user_id', $id)->get();
        return response()->json($bills);
    }

    public function getAllBillsByBill($id)
    {
        $bills = BillStatus::where('bill_id', $id)->get();
        return response()->json($bills);
    }

    public function getAllBills()
    {
        $bills = BillStatus::all();
        return response()->json($bills);
    }

    public function updateBillStatus($id)
    {
        $billStatus = BillStatus::where('bill_id', $id)->increment('bill_status');
        return response()->json($billStatus);
    }

    public function updateBillPaid($id)
    {
        $billStatus = BillStatus::where('bill_id', $id)->update(['bill_paid' => true]);
        return response()->json($billStatus);
    }

    public function cancelBillStatus($id)
    {
        $billStatus = BillStatus::where('bill_id', $id)->update(['bill_status' => 0, 'bill_paid' => false]);
        return response()->json($billStatus);
    }
}
