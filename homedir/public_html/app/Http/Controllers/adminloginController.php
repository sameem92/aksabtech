<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\member;
use App\order;
use App\blog;
use App\package;
use App\service;
use App\work;
use App\appliedwork;
use Illuminate\Support\Facades\Auth;

class adminloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(Auth::guard('admin')->check()) 
        {
            $logo              = setting::value('logo');
            $allorderss        = order::count();
            $blogcount         = blog::count();
            $packagecount      = package::count();
            $services          = service::where('parent',0)->count();
            $works             = work::where('parent',0)->count();
            $appliedworks      = appliedwork::count();
            return view('admin.dashboard',compact('logo','allorderss','blogcount','packagecount','services','works','appliedworks'));
        }
        else
        {
            $logo = setting::value('logo');
            return view('admin.login',compact('logo'));
        }
        
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
        $username = $request['username'];
        $pass     = $request['pass'];

        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $pass])) 
        {
            return redirect('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0');
        }
        else
        {
            session()->flash('loginfailed','اسم المستخدم او كلمة المرور غير صحيحة ! حاول مرة اخرى');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0');
    }
}
