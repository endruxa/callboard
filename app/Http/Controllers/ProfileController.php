<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileController;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::with('user')->paginate(5);
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * @param StoreProfileController $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProfileController $request)
    {
        try {
            \DB::beginTransaction();
            //get user_id
            $request['user_id'] = $request->user()->id;
            //store
            $profile = Profile::create($request->all());
            //attach to activity
            /*$profile->activity()->attach($request->activity);*/
            \DB::commit();
        }catch (\Exception $e){
            \DB::rollBack();
            return back()->withInput()->withErrors('Profile is not created!');
        }
        return redirect()->route('profile.index')->withMessage('Profile Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
