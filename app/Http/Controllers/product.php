<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product extends Controller
{

    public function index(){

    }

    public function add(){
        $category =  DB::table("category")->get();
        return view("product.add",compact("category"));
    }

    public function store(Request $request){

    }

    public function edit($id){

    }

    public function update(Request  $request){

    }

    public function delete($id){

    }
}
