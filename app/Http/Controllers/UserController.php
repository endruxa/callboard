<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function profile()
    {
        //view user profile
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upload_avatar(Request $request)
    {
        //upload avatar
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            //save as user avatar
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        };
        return view('profile', compact('user'));
    }
}
