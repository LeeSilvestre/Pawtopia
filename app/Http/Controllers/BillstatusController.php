<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillStatus;
use App\Models\BillDetails;
use App\Models\Food;

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
        $bill = BillStatus::where('bill_id', $id)->first();

        if ($bill && $bill->bill_status == 1) {
            $billDetails = BillDetails::where('bill_id', $id)->get();
            foreach ($billDetails as $detail) {
                $food = Food::find($detail->food_id);
                if ($food) {
                    if ($food->food_qty >= $detail->item_qty) {
                        $food->food_qty -= $detail->item_qty;
                        $food->save();
                    } else {
                        return response()->json(['error' => 'Insufficient quantity for item ' . $detail->food_id], 400);
                    }
                } else {
                    return response()->json(['error' => 'Food item not found for ID ' . $detail->food_id], 404);
                }
            }
        }

        $billStatus = BillStatus::where('bill_id', $id)->increment('bill_status');
        return response()->json($billStatus);
    }

    public function updateBillPaid($id)
    {
        $billStatus = BillStatus::where('bill_id', $id)->update(['bill_paid' => 'true']);
        return response()->json($billStatus);
    }

    public function cancelBillStatus($id)
    {
        $billStatus = BillStatus::where('bill_id', $id)->update(['bill_status' => 0, 'bill_paid' => 'false']);
        return response()->json($billStatus);
    }
}
