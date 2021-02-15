<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use Carbon\Carbon;
use DB;

class OrderController extends Controller
{
    public function placeOrder(Request $data){
    
        //there are two roles admin and customer so we have to confirm it admin or customer before assign the $user_id  
        $id = auth()->user()->id;
        $roleid = DB::table('role_user')->where('user_id',$id)->value('role_id');

        if ($roleid == 2) {
            $user_id = auth()->user()->admin->id;
        }else {
            $user_id = auth()->user()->customer->id;
        }

        
        // dd($user_id);
        //getting date only 
        $date = Carbon::today()->toDateString();
        
        //getting time onlt
        $time = Carbon::now()->toTimeString();
        // dd($data,$user_id,$date,$time,$data['qty'],$data['days']);
        // echo $user_id;
        
        $data->validate([
            // 'fee' => ['required','integer'],
            'days' =>['required','integer'],
            'qty' =>['required','integer'],
        ]

        );

        

        $order = Order::create([
            'customer_id' => $user_id,
            'tool_id' => '1',// take tool id from database eran will creating it 
            'location_id' => '2',
            'date' => $date,
            'time' =>$time,
            'fee' => '250', // take fee(amount) from database eran will creating it 
            'qty' => $data['qty'],
            'delivery_fee' => '250',
            'days' => $data['days'],
            'status' => 'Processing',
        ]);

        return back()->with('success','Order Successflly Placed');
    }

    public function viewOrder(){

        $data = order::all()->toArray();

        return view('order.viewOrder',compact('data'));
    }

    public function cusOrderDetails(){

        //getting customer id 
        $cus_id = auth()->user()->customer->id;

        // dd($cus_id);
        $data = order::where('customer_id',$cus_id)->get();

        // geting order details to a particular user 

        // dd($data[0]['order_id']);

        return view('order.cusOrderDetails',compact('data','cus_id'));
    }

    //update order status
    public function statusUpdate(Request $data){

        // dd($data['status'],$data['id']);
        $status = Order::where('order_id',$data['id'])->update([
            'status' => $data['status'],
        ]);
        
        return back()->with('success',"Successfully updated order status");
    }
}
