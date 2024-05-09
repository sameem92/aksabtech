<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use Illuminate\Support\Facades\Auth;

class adminhomeController extends Controller
{
    /**   
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //chooseus
    public function index()
    {
         $logo       = DB::table('settings')->value('logo');
         $changelogo = setting::first();
         return view('admin.home.chooseus.index',compact('logo','changelogo'));
    }

     //statistics
    public function index2()
    {
       $logo       = DB::table('settings')->value('logo');
       $changelogo = setting::first();
       return view('admin.home.statistics.index',compact('logo','changelogo'));
    }

    //packagesandoffers
    public function index3()
    {
       $logo       = DB::table('settings')->value('logo');
       $changelogo = setting::first();
       return view('admin.home.packagesandoffers.index',compact('logo','changelogo'));
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
        //
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
       //
    }
}
