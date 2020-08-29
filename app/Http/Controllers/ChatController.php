<?php

namespace App\Http\Controllers;
use DB;
use App\Friend;
use App\User;
use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{


	public function index()
	{
    //	$arr['friends']=Auth::user()->friends();
      //return view('friend.index')->with($arr); 
  $arr['friends'] =DB::table('users')->join('friends','friends.friend_id','users.id')->where('friends.user_id', '=', 3)->get();
//	    return view('friend.index')->with($arr);



	    //$arr['friends'] = DB::table('friends')->where('user_id', '=', 1)->get();
	    //select name from user where id=(select user_id from friend)

	    return view('friend.index')->with($arr);}

	 public function show($id)
	{
		$user = User::find($id);
		//echo $friend->name;
      return view('friend.show',compact('user'));
  }  

  public function getChat($id)
  {
   $chats=Chat::where(function($query) use ($id)
{$query->where('user_id','=',Aunth::user()->id)->where('friend_id','=',$id);})->orWhere(function($query) use ($id)
{
	$query->where('user_id','=',$id)->where('friend_id','=',Auth::user()->id);})->get(); 	
  return $chats;
  }
}
