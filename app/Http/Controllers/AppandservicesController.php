<?php

namespace App\Http\Controllers;

use App\Models\Digitalhealthplatform;
use Illuminate\Http\Request;

class AppandservicesController extends Controller
{
    public function show_data(){
        $infra=[];
        $infra['rows']=Digitalhealthplatform::all();
        return view('frontend.appandservice',compact('infra'));
    }
}
