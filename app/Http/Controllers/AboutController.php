<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class AboutController extends Controller
{
   public function index(){
      $all_volunters= Volunteer::get();
      return view('about.aboutus',compact('all_volunters'));
   }
}
