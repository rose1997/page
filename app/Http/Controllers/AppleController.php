<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use \Input;

class AppleController extends Controller
{
    //
    public function apple(Request $request){
        $users= new User;
        dd(Input::get('studentid'));
        $apple = $users::where('studentid',Input::get('studentid'))->toArray();
        dd($apple[1]);
        
    }
}
