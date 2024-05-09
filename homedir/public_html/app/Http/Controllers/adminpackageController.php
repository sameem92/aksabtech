<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\package;
use App\service;
use Illuminate\Support\Facades\Auth;

class adminpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $logo      = DB::table('settings')->value('logo');
       $packages  = package::get();
       return view('admin.package.index',compact('logo','packages'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo      = DB::table('settings')->value('logo');
        $services  = service::where('parent',0)->get();
        return view('admin.package.create',compact('logo','services'));
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
            'name'            => 'required',
            'bgimage'         => 'image',
            'price'           => 'required',
            'packagedesc'     => 'required',
        ]);
            
        $newpackage                  = new package;
        $newpackage->service_id      = $request->service_id;
        $newpackage->name            = $request->name;
        $newpackage->price           = $request->price;
        $newpackage->packagedesc     = $request->packagedesc;
        if($request->hasFile('bgimage'))
        {
            $image    = $request['bgimage'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newpackage->bgimage = $filename;
        }
        $newpackage->save();
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
       $edpackage = package::findorfail($id);
       $services  = service::where('parent',0)->get();
       return view('admin.package.edit',compact('logo','edpackage','services'));
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
        $uppackage = package::findorfail($id);
        $this->validate($request,[
            'name'            => 'required',
            'price'           => 'required',
            'packagedesc'     => 'required',
        ]);
            
        $uppackage->name            = $request->name;
        $uppackage->service_id      = $request->service_id;
        $uppackage->price           = $request->price;
        $uppackage->packagedesc     = $request->packagedesc;
        if($request->hasFile('image'))
        {
            $this->validate($request,[
            'bgimage'         => 'image',
            ]);
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $uppackage->image = $filename;
        }
        $uppackage->save();
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
        package::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}
