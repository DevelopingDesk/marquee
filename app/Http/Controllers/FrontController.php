<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

use App\Contact;
use App\News;
class FrontController extends Controller
{
    public function index(){
  $gallery=Gallery::all();
  $latgal=Gallery::Latest('created_at')->take(3)->get();
  //dd($latgal);
$cont=Contact::first();
$news=News::first();
    	return view('welcome')->withgallery($gallery)->withcontact($cont)->withnews($news)->withltgal($latgal);
    }
}
