<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\setting;
use App\slider;
use DB;
 
class adminsliderController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo          = DB::table('settings')->value('logo');
        $allsliders    = slider::where('type',0)->where('type_id',0)->get();
        $changelogo    = setting::first();
        return view('admin.sliders.index',compact('allsliders','logo','changelogo'));
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
            'slider'     => 'image|required',
            'slogan'     => 'required',
            'shortdesc'  => 'required',
        ]);
        
        $newslider            = new slider;
        $newslider->slogan    = $request['slogan'];
        $newslider->shortdesc = $request['shortdesc'];
        $newslider->type      = $request['type'];
        $newslider->type_id   = $request['type_id'];
        if($request->hasFile('slider'))
        {
            $image    = $request['slider'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newslider->slider = $filename;
        }
        $newslider->save();
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
        $logo          = DB::table('settings')->value('logo');
        $edslider      = slider::findorfail($id);
        return view('admin.sliders.edit',compact('edslider','logo'));
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
        $upslider            = slider::find($id);
        if(Input::has('suspensed'))
        {
            if($upslider->suspensed == 0)
            {
                DB::table('sliders')->where('id',$id)->update(['suspensed' => 1]);
                session()->flash('success','تم تعطيل صورة السلايدر بنجاح');
                return back();
            }
            else 
            {
                DB::table('sliders')->where('id',$id)->update(['suspensed' => 0]);
                session()->flash('success','تم تفعيل صورة السلايدر  بنجاح');
                return back();
            }
        }
        else 
        {
            $this->validate($request,[
                'slogan'     => 'required',
                'shortdesc'  => 'required',
            ]);

            $upslider->slogan    = $request['slogan'];
            $upslider->shortdesc = $request['shortdesc'];

            if($request->hasFile('slider'))
            {
                $path = 'users/images/'.$upslider->slider;
                unlink($path);
                $image    = $request['slider'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upslider->slider = $filename;
            }
            $upslider->save();
            session()->flash('success','تم التعديل بنجاح');
        }
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
       $delslider = slider::findorfail($id)->delete();
       session()->flash('success','تم الحذف بنجاح');
       return back();
    }
}
