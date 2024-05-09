<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\ourclient;
use Illuminate\Support\Facades\Auth;

class adminclientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $logo       = DB::table('settings')->value('logo');
       $changelogo = setting::first();
       $clients    = ourclient::get();
       return view('admin.home.clients.index',compact('logo','changelogo','clients'));
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
        $this->validate($request,[
            'image'       =>'image',
        ]);
            
        $newclient       = new ourclient;
        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newclient->image = $filename;
        }
        $newclient->save();
        session()->flash('success','تم الإضافة بنجاح');
        return back();
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
    public function destroy(Request $request, $id)
    {
        ourclient::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}