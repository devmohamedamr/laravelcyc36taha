<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class home extends Controller
{
    //
    public function index(){
        $res =  DB::table("category")->get();

        return view("index",compact("res"));
    }

    public function add(){

        return view("add");
    }

    public function store(Request $request){

        $request->validate([
            "name" => "required",
            "age"=>"required"
        ]);
        Session::flash("success","category insereted");

        DB::table("category")->insert(['title'=>$request->name,'age'=>$request->age]);
        return redirect("home/index");
    }

    public function delete($id){

        DB::table("category")->delete($id);
        Session::flash("success","category deleted");
        return redirect("home/index");
    }

    public function edit($id){

        $data =  DB::table("category")->where("id",$id)->first();

        return view("edit",compact("data"));
    }

    public function update(Request $request){

        $request->validate([
            "name" => "required",
            "age"=>"required"
        ]);

        DB::table("category")->where("id",$request->id)->update([
            "title" => $request->name,
            "age" => $request->age
        ]);
        Session::flash("success","category updated");
        return redirect("home/index");
    }
}
