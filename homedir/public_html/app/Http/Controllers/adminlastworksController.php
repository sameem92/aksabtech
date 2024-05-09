<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\lastwork;
use Illuminate\Support\Facades\Auth;

class adminlastworksController extends Controller
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
       $lastworks  = lastwork::get();
       return view('admin.home.lastworks.index',compact('logo','changelogo','lastworks'));
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
            
        $newwork       = new lastwork;
        $newwork->link = $request->link;
        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newwork->image = $filename;
        }
        $newwork->save();
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
       $logo      = DB::table('settings')->value('logo');
       $edwork    = lastwork::findorfail($id);
       return view('admin.home.lastworks.edit',compact('logo','edwork'));
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
        $upwork = lastwork::findorfail($id);

        $this->validate($request,[
            'link'  =>'required',
        ]);
            
        $upwork->link = $request->link;
        if($request->hasFile('image'))
        {
            $this->validate($request,[
                'image'       =>'image',
            ]);

            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upwork->image = $filename;
        }
        $upwork->save();
        session()->flash('success','تم التعديل بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        lastwork::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}
