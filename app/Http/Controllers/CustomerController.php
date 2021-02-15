<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class CustomerController extends Controller
{
    public function reg(){
        return view('auth/register');
    }

    // send customer registered data to another table 
     public function customerCreate(Request $data){

        
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->attachRole('user');

        // geting user id from users table
        $user_id = DB::table('users')->where('email',$data['email'])->value('id');

        $user->customer()->create([
            'name'=> $data['name'],
            'address' => $data['address'],
            'user_id' => $user_id,
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);

        //get customer id acording to phone number 

        $cusId = DB::table('customers')->where('email',$data['email'])->value('id');
        

        //inserting customer phone number to cstomer_phones table 
        DB::table('customer_phones')->insert([
            'customer_id' => $cusId,
            'phone' => $data['phone'],
        ]);
        

        return redirect()->route('userLogin')->with('success', 'User Created Successfully!');
        

    }
}
