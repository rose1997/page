<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function index(Request $request)
{
	$users = User::all();
    return view('welcome', [
        'users' => $users,
    ]);
}

//     public function index(Request $request)
// {
// 	$users = User::all();
//     return view('login', [
//         'users' => $users,
//     ]);
// }

	public function create()
    {
       return view('register');
    }

	public function store(Request $request)
	{
	   $users = new User;
	   $users->name = $request->name;
	   $users->studentid = $request->studentid;
	   $users->password = $request->password;
	   $users->save();
    return redirect('/');
	}

	// public function destroy(Request $request, Message $message){
	// 	$message->delete();
	// 	return redirect('/messages');
	// }

	    
}
