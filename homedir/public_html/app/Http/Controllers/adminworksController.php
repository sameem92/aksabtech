<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\setting;
use App\work;
use App\slider;
use App\appliedwork;
use DB;
 
class adminworksController  extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    
    public function index()
    {
        $logo           = DB::table('settings')->value('logo');
        $allworks       = work::where('parent',0)->get();
        return view('admin.work.index',compact('allworks','logo'));
    }

    public function index2()
    {
        $logo           = DB::table('settings')->value('logo');
        $changelogo     = setting::first();
        $allsliders     = slider::where('type',2)->where('type_id',0)->get();
        return view('admin.work.index2',compact('allsliders','logo','changelogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo           = DB::table('settings')->value('logo');
        return view('admin.work.create',compact('logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $newwork              = new work;
        $newwork->name        = $request->name;
        $newwork->shortdesc   = $request->shortdesc;
        $newwork->worktext    = $request->worktext;
        $newwork->parent      = $request->parent;

        if($request->hasFile('slidermockup'))
        {
            $image    = $request['slidermockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newwork->slidermockup = $filename;
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
        $logo            = DB::table('settings')->value('logo');
        $changelogo      = setting::first();
        $showwork        = work::findorfail($id);
        $allworks        = work::where('parent',$id)->get();
        $allsliders      = slider::where('type',2)->where('type_id',$id)->get();
        $allappliedworks = appliedwork::where('work_id',$id)->get();
        return view('admin.work.show',compact('allsliders','logo','changelogo','showwork','allworks','allappliedworks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo        = DB::table('settings')->value('logo');
        $edwork      = work::findorfail($id);
        return view('admin.work.edit',compact('edwork','logo'));
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
        $upwork              = work::find($id);
        $upwork->name        = $request->name;
        $upwork->shortdesc   = $request->shortdesc;
        $upwork->worktext    = $request->worktext;

        if($request->hasFile('slidermockup'))
        {
            $image    = $request['slidermockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upwork->slidermockup = $filename;
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
    public function destroy($id)
    {
       $delwork = work::findorfail($id)->delete();
       session()->flash('success','تم الحذف بنجاح');
       return back();
    }
}
