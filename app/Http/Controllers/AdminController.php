<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\admin;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:administrator');
    }

    public  function index(){
        return view('admin.ad-dashboard');
    }

    public  function reg(){
        return view('admin.adminUserMange');
    }

    //display user details 
    public function userView(){

        $data = admin::all()->toArray();

        // return admin::all();
        return view('admin.adminUserView',compact('data'));
    }

    public function adminCreate(Request $data){

        
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->attachRole('administrator');

        // geting user id from users table
        $user_id = DB::table('users')->where('email',$data['email'])->value('id');
        
        $user->admin()->create([
            'name'=> $data['name'],
            'user_id' => $user_id,
            'lname'=> $data['lname'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
        
        return back()->with('success', 'User Created Successfully!');
        


    }

    public function adminUpdate(Request $data){
     
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        
        $user = User::where('id',$data['id'])->update([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=>Hash::make($data['password']),
        ]);

        $user = admin::where('id',$data['id'])->update([
            'name'=> $data['name'],
            'lname'=> $data['lname'],
            'email'=> $data['email'],
            'password'=>Hash::make($data['password']), 
        ]);
        return back()->with('success','User Details Successfully Updated!');
        
    }   

    public function adminDelete($delete_mail){
       
        // dd($email);
        $user = User::where('email',$delete_mail)->delete();

        $user = admin::where('email',$delete_mail)->delete();
        
        
        return response()->json(['status'=>'User Details Successfully Deleted!']);
        // return back()->with('success','User Details Successfully Deleted!');

    }
}
