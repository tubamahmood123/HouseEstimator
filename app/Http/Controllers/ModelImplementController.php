<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ModelImplementController extends Controller
{
    public function index(Request $req)
    {
      $location=$req->property_loc;
      $area=$req->property_area;
      $unit = $req->property_unit;
      $bedroom=$req->home_bed;
      $bathroom=$req->home_bath;
      $kitchen=$req->home_kitch;
      $year_of_construction=$req->home_cont_Year;
      $No_of_stories=$req->home_noofstories;
      $Parking_spot=$req->home_parkingspot;
      $No_of_garden=$req->home_garden;
      $quarter=$req->home_quater;
      $swiming_pool=$req->home_pool;
      $powder_room=$req->powder_room;
      $Security_society=$req->society_security;
      $Lane_society=$req->lane_society;
      $furnished=$req->furnished;
      $home_power=$req->home_power;
      $gated_society=$req->gated_society;

      
    return view('modelimplement',compact('location','area','unit','bedroom','bathroom','kitchen','Parking_spot','No_of_garden','quarter','swiming_pool','powder_room','year_of_construction','No_of_stories','Security_society','Lane_society','furnished','home_power','gated_society'));
       }

       


   


}



