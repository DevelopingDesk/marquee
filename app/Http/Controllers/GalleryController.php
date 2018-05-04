<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;
use App\Gallery;
use Illuminate\Support\facades\input;
use Session;
class GalleryController extends Controller
{
    
    public function create(){
    	$gallery=Gallery::all();
return view('Gallery.create')->withgallery($gallery);

    }
    public function store(Request $request){

  $product=new Gallery();  
  $product->name=$request['name'];


//$product->size=$request['size'];
$product->description=$request['description'];


if(input::hasfile('images'))
{

    $file=input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $product->image=$file->getClientOriginalName();
}

    $product->save();
     Session::flash('flash_message', 'Image successfully added!');
   
     
     return redirect()->back();

    }
    public function delete($id){

$id=Gallery::where('id',$id)->first();
$id->delete();
Session::flash('flash_message','Deleted successfully');
return back();

    }
}
