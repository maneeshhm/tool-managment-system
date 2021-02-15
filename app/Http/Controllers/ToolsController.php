<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;

class ToolsController extends Controller
{

    // show tools page..........
    public function index(){
        return view('tools/toolsadd');
    }

    // data insert to table............
    public function inserttool(Request $request){
        $tool = new Tools();

        $tool->tool_name = $request->input('tool_name');
        $tool->tool_category = $request->input('tool_category');
        $tool->tool_quality = $request->input('tool_quality');
        $tool->tool_price = $request->input('tool_price');
        $tool->tool_quantity = $request->input('tool_quantity');
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/tools', $filename);
            $tool->image = $filename;
        }
        else{
            return $request;
            $tool->image = '';
        }

        $tool->save();

        return view('tools/toolsadd')->with('tool',$tool);
    }

    // get table data , display all tools....
    public function display(){
        $tool = Tools::all();
        return view('tools/toolsview')->with('tool',$tool);
    }

    //update tool get data to another form ...........
    public function updatebtn($id){
        $tool=Tools::find($id);

        return view('tools/toolsupdateform')->with('tool',$tool);
    }

    //update tool................
    public function update(Request $request, $id){
        $tool=Tools::find($id);

        $tool->tool_name = $request->input('tool_name');
        $tool->tool_category = $request->input('tool_category');
        $tool->tool_quality = $request->input('tool_quality');
        $tool->tool_price = $request->input('tool_price');
        $tool->tool_quantity = $request->input('tool_quantity');
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/tools', $filename);
            $tool->image = $filename;
        }

        $tool->save();

        return redirect('/toolsview')->with('tool',$tool);
    }

    //delete function
    public function deletebtn($id){
        $tool=Tools::find($id);
        $tool->delete();

        return redirect('/toolsview')->with('tool',$tool);
    }

    // show tools page to customer..........
    public function showtools(){
            $tool = Tools::all();
            return view('tools/customertoolview')->with('tool',$tool);
    }

    //update tool get data to another form ...........
    public function ordertoolbtn($id){
        $tool=Tools::find($id);

        return view('layouts/productLayout')->with('tool',$tool);
    }
}