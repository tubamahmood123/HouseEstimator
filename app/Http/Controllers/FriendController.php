<?php

namespace App\Http\Controllers;
use App\Friend;
use Auth;
use DB;
use Illuminate\Http\Request;

class FriendController extends Controller
{
	public function index()
	{
	
}

public function store(Request $request)
    {
        // validate

        // add to database
        $friend = new Friend;
        $friend->user_id = Auth::user()->id;
        $friend->friend_id = $request->friend_id;
        $friend->save();

        // success message and return
        Session::flash('success', 'Friend has been added');
        return redirect()->back();
    }
}