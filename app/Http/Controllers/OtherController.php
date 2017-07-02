<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{

    public function testfunction(Request $request) {


        if($request->ajax()){
            $fname=request('name');
            $city=request('city');
            return "Dear " . $fname . ".<br>Hope you live well in ".$city.".";
        }
        return "HTTP";
    }

    public function store(Request $request) {

        $data = $request->all();

        return response()->json($data);
    }
}
