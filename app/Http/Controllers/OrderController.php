<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
//return all
        return Order::all();
    }

    public function store(Request $request)
    {
        //create new
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'vehicle_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {


        Order::create([
            'vehicle_id' => $request->input('vehicle_id'),
            'status' => $request->input('status'),

        ]);}
        return response()->json(['req' => $request]);

    }

    public function create()
    {

        return view('order.create');
    }
    public function destroy(){

        return response()->json(['$data']);

    }
}
