<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = (Setting::first())->main;
        return view('admin.siteSetting',compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = Setting::first() ?? new Setting;
        $main = $setting->main;
        foreach ($request->except('_token') as $key => $value)
            $main[$key] = $value;

        $file = $request->file('logo');
        if ( $request->hasFile('logo') && !is_null($request->logo) ) {
            $res = $file->move(public_path('img'),'logo.png');
            $main['img'] = 'logo.png';
        }
        $setting->main = $main;
        $setting->save();
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
