<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information = new Information();
        $information->gender = $request->gender;
        $information->birthday = $request->birthday;
        $information->address = $request->address;
        $information->phone_number = $request->phone_number;
        $information->hobby = $request->hobby;
        $information->experience = $request->experience;
        $information->education = $request->education;
        $information->save();//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $information = Information::findOrFail($id);
        $information->gender = $request->gender;
        $information->birthday = $request->birthday;
        $information->address = $request->address;
        $information->phone_number = $request->phone_number;
        $information->hobby = $request->hobby;
        $information->experience = $request->experience;
        $information->education = $request->education;
        $information->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $information= Information::findOrFail($id);
       $information->delete();//
    }
}
