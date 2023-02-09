<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;
use App\Models\Donor;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $blood_groups = Blood::get();
      $cities = City::get();
      $super_donors= Donor::with('city','donor')->latest()->take(6)->get();
      return view('super',compact('blood_groups','super_donors','cities'));
    }
}
