<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\setting;
use App\service;
use App\slider;
use DB;
 
class adminservicesController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo           = DB::table('settings')->value('logo');
        $allservices    = service::where('parent',0)->get();
        return view('admin.service.index',compact('allservices','logo'));
    }

    public function index2()
    {
        $logo           = DB::table('settings')->value('logo');
        $changelogo     = setting::first();
        $allsliders     = slider::where('type',1)->where('type_id',0)->get();
        return view('admin.service.index2',compact('allsliders','logo','changelogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo           = DB::table('settings')->value('logo');
        return view('admin.service.create',compact('logo'));
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
            'service'    => 'required',
            'shortdesc'  => 'required',
        ]);
        
        $newservice              = new service;
        $newservice->service     = $request->service;
        $newservice->shortdesc   = $request->shortdesc;
        $newservice->servicetext = $request->servicetext;
        $newservice->featuretext = $request->featuretext;
        $newservice->features    = $request->features;
        $newservice->phasetext   = $request->phasetext;
        $newservice->parent      = $request->parent;


        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newservice->image = $filename;
        }

        if($request->hasFile('slidermockup'))
        {
            $image    = $request['slidermockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newservice->slidermockup = $filename;
        }
        if($request->hasFile('servicemockup'))
        {
            $this->validate($request,[
                'servicemockup' => 'image',
            ]);
            $image    = $request['servicemockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newservice->servicemockup = $filename;
        }
        if($request->hasFile('serviceimagebg'))
        {
            $this->validate($request,[
                'serviceimagebg' => 'image',
            ]);
            $image    = $request['serviceimagebg'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newservice->serviceimagebg = $filename;
        }

        $newservice->save();
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
        $logo           = DB::table('settings')->value('logo');
        $changelogo     = setting::first();
        $showservice    = service::findorfail($id);
        $allservices    = service::where('parent',$id)->get();
        $allsliders     = slider::where('type',1)->where('type_id',$id)->get();
        return view('admin.service.show',compact('allsliders','logo','changelogo','showservice','allservices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo          = DB::table('settings')->value('logo');
        $edservice      = service::findorfail($id);
        return view('admin.service.edit',compact('edservice','logo'));
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
        $upservice            = service::find($id);

        $this->validate($request,[
            'service'    => 'required',
            'shortdesc'  => 'required',
        ]);
        
        $upservice->service     = $request->service;
        $upservice->shortdesc   = $request->shortdesc;
        $upservice->servicetext = $request->servicetext;
        $upservice->featuretext = $request->featuretext;
        $upservice->features    = $request->features;
        $upservice->phasetext   = $request->phasetext;
        


        if($request->hasFile('image'))
        {
            $this->validate($request,[
                'image' => 'image',
            ]);

            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upservice->image = $filename;
        }

        if($request->hasFile('slidermockup'))
        {
            $this->validate($request,[
                'slidermockup' => 'image',
            ]);

            $image    = $request['slidermockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upservice->slidermockup = $filename;
        }
        if($request->hasFile('servicemockup'))
        {
            $this->validate($request,[
                'servicemockup' => 'image',
            ]);
            $image    = $request['servicemockup'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upservice->servicemockup = $filename;
        }
        if($request->hasFile('serviceimagebg'))
        {
            $this->validate($request,[
                'serviceimagebg' => 'image',
            ]);
            $image    = $request['serviceimagebg'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upservice->serviceimagebg = $filename;
        }

        $upservice->save();
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
       $delservice = service::findorfail($id)->delete();
       session()->flash('success','تم الحذف بنجاح');
       return back();
    }
}
