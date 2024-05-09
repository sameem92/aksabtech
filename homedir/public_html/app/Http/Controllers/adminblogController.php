<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\blog;
use Illuminate\Support\Facades\Auth;

class adminblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $logo      = DB::table('settings')->value('logo');
       $blogs     = blog::get();
       return view('admin.blog.index',compact('logo','blogs'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo      = DB::table('settings')->value('logo');
        return view('admin.blog.create',compact('logo'));
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
            'blogdesc'      => 'required',
        ]);
            
        $newblog               = new blog;
        $newblog->title        = $request->title;
        $newblog->shortdesc    = $request->shortdesc;
        $newblog->blogdesc     = $request->blogdesc;
        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newblog->image = $filename;
        }
        $newblog->save();
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
       $edblog    = blog::findorfail($id);
       return view('admin.blog.edit',compact('logo','edblog'));
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
        $upblog = blog::findorfail($id);
        $this->validate($request,[
            'title'         => 'required',
            'shortdesc'     => 'required',
            'blogdesc'      => 'required',
        ]);
            
        $upblog->title        = $request->title;
        $upblog->shortdesc    = $request->shortdesc;
        $upblog->blogdesc     = $request->blogdesc;

        if($request->hasFile('image'))
        {
            $this->validate($request,[
            'image'         => 'image',
            ]);

            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upblog->image = $filename;
        }
        $upblog->save();
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
        blog::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}
