<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
class NewsController extends Controller
{
    public function create(){

    	return view('News.create');
    }
    public function upload(Request $request){


    	$news=News::where('id',1)->first();

    	$news->news=$request->name;
    	$news->update();
    	Session::flash('flash_message','Updated Successfully');
    	return back();
    }
}
