<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Inquery;
use Session;
class ContactController extends Controller
{
    public function store(Request $request){

$cont=New Inquery();
$cont->fname=$request->fname;
$cont->lname=$request->lname;
$cont->email=$request->email;
$cont->subject=$request->subject;
$cont->message=$request->message;
$cont->save();
Session::flash('flash_message','Your Querry Posted');
return  back();

    }
    public function viewInquery(){

$all=Inquery::all();
    	return view('Inquery.view')->withinquery($all);
    }

    public function delete($id){


    	$inquery=Inquery::where('id',$id)->first();
    	$inquery->delete();
    	Session::flash('flash_message','deleted successfully');
    	return back();
    }
    public function createContact(){
$check=Contact::first();


        return view('Contact.create')->withcontact($check);
    }
      public function storeContact(Request $request){
$check=Contact::first();

if($check==null){

$obj=new Contact();
$obj->name=$request->name;
$obj->phone=$request->phone;
$obj->telphone=$request->tell;
$obj->address=$request->address;
$obj->email=$request->email;
$obj->save();
}
else{

$upobj=Contact::first();
$upobj->name=$request->name;
$upobj->phone=$request->phone;
$upobj->telphone=$request->tell;
$upobj->address=$request->address;
$upobj->email=$request->email;
$upobj->update();

}




return back();

   



    }
}
