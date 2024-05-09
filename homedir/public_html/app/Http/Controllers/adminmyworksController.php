<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\appliedwork;
use App\work;
use Illuminate\Support\Facades\Auth;

class adminmyworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $logo              = DB::table('settings')->value('logo');
       $allappliedworks   = appliedwork::get();
       $allworks          = work::where('parent',0)->get();
       return view('admin.myworks.index',compact('logo','allappliedworks','allworks'));
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
            'title'         => 'required',
            'image'         => 'image',
            'shortdesc'     => 'required',
        ]);
            
        $newappliedwork               = new appliedwork;
        $newappliedwork->work_id      = $request->work_id;
        $newappliedwork->title        = $request->title;
        $newappliedwork->shortdesc    = $request->shortdesc;
        $newappliedwork->link         = $request->link;
        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newappliedwork->image = $filename;
        }
        $newappliedwork->save();
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
       $edwork    = appliedwork::findorfail($id);
       return view('admin.myworks.edit',compact('logo','edwork'));
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
        $upwork = appliedwork::findorfail($id);

        $this->validate($request,[
            'title'         => 'required',
            'shortdesc'     => 'required',
        ]);
            
        $upwork->title        = $request->title;
        $upwork->shortdesc    = $request->shortdesc;
        $upwork->link         = $request->link;

        if($request->hasFile('image'))
        {
            $this->validate($request,[
                'image'  => 'image',
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
        appliedwork::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}
