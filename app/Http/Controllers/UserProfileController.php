<?php

namespace App\Http\Controllers;

use App\Models\User_Profile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function user()
    {
            $user=User_Profile::all();
            //dd($user);
return view('backend.pages.user.user',compact('user'));

    }



    public function create()
    {

return view('backend.pages.user.create');

    }



    public function store(Request $request)
    {
       // dd($request ->all());

        User_Profile::create([

            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status

        ]);
        return 'store';

    }
}
