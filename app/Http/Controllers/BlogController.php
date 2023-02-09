<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class BlogController extends Controller
{
  public function allpost(){
    $all_cities = City::get();
    return view('blog.all_post',compact('all_cities'));
  }
  
  public function singlepage(){
    return view('blog.single_page');
  }
}
