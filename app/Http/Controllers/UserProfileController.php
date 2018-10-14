<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileController;
use App\UserProfile;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * @param UserProfile $userProfile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(UserProfile $userProfile)
    {
        $user = \Auth::user();
        $userProfile = UserProfile::where('user_id', auth()->user()->id)->get();
        return view('user_profile.index', compact('userProfile', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();
        return view('user_profile.create', compact('user'));
    }

    /**
     * @param StoreProfileController $request
     * @return $this
     */
    public function store(StoreProfileController $request)
    {
        try {
            \DB::beginTransaction();
            //get user_id
            $request['user_id'] = \Auth::user()->id;
            //get slug
            $request['slug'] = str_slug($request['description']);
            //store
            $userProfile = UserProfile::create($request->all());
            \DB::commit();
        }catch (\Exception $e){
            \DB::rollBack();
            return back()->withInput()->withErrors($e->getMessage());
        }
        return back()->withMessage('Profile Created!');
    }

    /**
     * @param UserProfile $userProfile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(UserProfile $userProfile)
    {
        return view('user_profile.show', compact('userProfile'));
    }

    /**
     * @param UserProfile $userProfile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(UserProfile $userProfile)
    {
        return view('user_profile.edit', compact('userProfile'));
    }

    /**
     * @param StoreProfileController $request
     * @param UserProfile $userProfile
     * @return mixed
     */
    public function update(StoreProfileController $request, UserProfile $userProfile)
    {
        $this->authorize('update', $userProfile);

        $userProfile->update($request->all());

        return redirect()->route('user.index', $userProfile->id)->withMessage('Profile updated!');

    }

    /**
     * @param UserProfile $userProfile
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
