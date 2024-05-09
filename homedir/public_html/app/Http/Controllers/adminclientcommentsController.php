<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\setting;
use App\clientscomment;
use Illuminate\Support\Facades\Auth;

class adminclientcommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $logo         = DB::table('settings')->value('logo');
       $comments     = clientscomment::get();
       return view('admin.home.comments.index',compact('logo','comments'));
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
            'comment'  =>'required',
            'name'     =>'required',
            'image'    => 'image',
        ]);
            
        $newcomment          = new clientscomment;
        $newcomment->comment = $request->comment;
        $newcomment->name    = $request->name;

        if($request->hasFile('image'))
        {
            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $newcomment->image = $filename;
        }
        $newcomment->save();
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
       $edcomment = clientscomment::findorfail($id);
       return view('admin.home.comments.edit',compact('logo','edcomment'));
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
        $upcomment = clientscomment::findorfail($id);

        $this->validate($request,[
            'comment'  =>'required',
            'name'     =>'required',
        ]);
            
        $upcomment->comment = $request->comment;
        $upcomment->name    = $request->name;

        if($request->hasFile('image'))
        {
            $this->validate($request,[
                'image'       =>'image',
            ]);

            $image    = $request['image'];
            $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
            $image->move(base_path('users/images/'),$filename);
            $upcomment->image = $filename;
        }
        $upcomment->save();
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
        clientscomment::findorfail($id)->delete();
        session()->flash('success','تم الحذف بنجاح');
        return back();
    }
}
