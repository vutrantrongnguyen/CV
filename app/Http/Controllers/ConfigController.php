<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class ConfigController extends Controller
{
    public function show()
    {
     $user = Auth::user()->get();
     if($user)
        $config = Config::all();
        return view('projectEdit', compact('config'));
    }

    public function make(Request $request)
    {
        dd($request);
        $config = new Config();
        $config->value = $request->value;
        $config->module = $request->module;
        $config->save();
    }

    public function update(Request $request, $id)
    {
        $config = Config::findOrFail($id);
        $config->value = $request->value;
        $config->module = $request->module;
        $config->save();
    }

    public function delete($id)
    {
        $config = Config::findOrFail($id);
        $config->delete();
    }
}
