<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use App\setting;
use App\member;
use DB;

class adminchangelogoController  extends Controller
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
        return view('admin.setting.changelogo',compact('changelogo','logo'));
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
        $upinfo = setting::find($id);

        if(Input::has('updatesocial'))
        {
            $upinfo->facebook      = $request->facebook;
            $upinfo->twitter       = $request->twitter;
            $upinfo->youtube       = $request->youtube;
            $upinfo->instagram     = $request->instagram;
            $upinfo->googleplay	   = $request->googleplay;
            $upinfo->applestore    = $request->applestore;
            $upinfo->save();
            session()->flash('success','تم تعديل مواقع التواصل الإجتماعى بنجاح');
            return back();
        }
        elseif(Input::has('updatecontactinfo'))
        {
            $upinfo->email      = $request->email;
            $upinfo->phone      = $request->phone;
            $upinfo->whatsapp   = $request->whatsapp;
            $upinfo->address    = $request->address;
            $upinfo->save();
            session()->flash('success','تم تعديل بيانات التواصل بنجاح');
            return back();
        }
        elseif(Input::has('footerbgimage'))
        {
            $this->validate($request,[
                'footerbgimage'       =>'image',
            ]);
            
            if($request->hasFile('footerbgimage'))
            {
                // $path = 'users/images/'.$upinfo->image;
                // unlink($path);

                $image    = $request['footerbgimage'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->footerbgimage = $filename;
            }
            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        elseif(Input::has('stuffbgimage'))
        {
            $upinfo->clientscount    = $request->clientscount;
            $upinfo->projectscount   = $request->projectscount;
            $upinfo->experiencecount = $request->experiencecount;
            $upinfo->employeecount   = $request->employeecount;

            if($request->hasFile('stuffbgimage'))
            {
                $this->validate($request,[
                    'stuffbgimage'       =>'image',
                ]);

                $image    = $request['stuffbgimage'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->stuffbgimage = $filename;
            }
            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        elseif(Input::has('chooseusbgimage'))
        {
            $this->validate($request,[
                'chooseustext'       =>'required',
            ]);

            $upinfo->chooseustext = $request->chooseustext;
            if($request->hasFile('chooseusbgimage'))
            {
                $this->validate($request,[
                    'chooseusbgimage'       =>'image',
                ]);
                $image    = $request['chooseusbgimage'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->chooseusbgimage = $filename;
            }
            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        elseif(Input::has('updateserviceinfo'))
        {
            $this->validate($request,[
                'servicetext'       =>'required',
            ]);
            
            $upinfo->servicetext = $request->servicetext;

            if($request->hasFile('servicesbgimage'))
            {
                $this->validate($request,[
                    'servicesbgimage'   =>'image',
                ]);
                $image    = $request['servicesbgimage'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->servicesbgimage = $filename;
            }

            if($request->hasFile('servicemockup'))
            {
                $this->validate($request,[
                    'servicemockup'   =>'image',
                ]);
                $image    = $request['servicemockup'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->servicemockup = $filename;
            }

            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        elseif(Input::has('updateworkinfo'))
        {
            $this->validate($request,[
                'worktext'       =>'required',
            ]);
            
            $upinfo->worktext = $request->worktext;

            if($request->hasFile('workbgimage'))
            {
                $this->validate($request,[
                    'workbgimage'   =>'image',
                ]);
                $image    = $request['workbgimage'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->workbgimage = $filename;
            }

            if($request->hasFile('workmockup'))
            {
                $this->validate($request,[
                    'workmockup'   =>'image',
                ]);
                $image    = $request['workmockup'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->workmockup = $filename;
            }

            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        elseif(Input::has('updatelastworkstext'))
        {
            $upinfo->lastworkstext    = $request->lastworkstext;
            $upinfo->save();
            session()->flash('success','تم التعديل بنجاح');
            return back();
        }
        elseif(Input::has('updateourtoolstext'))
        {
            $upinfo->ourtoolstext    = $request->ourtoolstext;
            $upinfo->save();
            session()->flash('success','تم التعديل بنجاح');
            return back();
        }
        elseif(Input::has('updatepackagetext'))
        {
            $upinfo->packagetext    = $request->packagetext;
            $upinfo->save();
            session()->flash('success','تم التعديل بنجاح');
            return back();
        }
        elseif(Input::has('updateourclientstext'))
        {
            $upinfo->ourclientstext    = $request->ourclientstext;
            $upinfo->save();
            session()->flash('success','تم التعديل بنجاح');
            return back();
        }
        elseif(Input::has('homeslidermockup'))
        {
            $this->validate($request,[
                'homeslidermockup'   =>'image',
            ]);
            
            if($request->hasFile('homeslidermockup'))
            {
                $image    = $request['homeslidermockup'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->homeslidermockup = $filename;
            }
            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
        else 
        {
            $this->validate($request,[
                'logo'       =>'image',
            ]);
            
            if($request->hasFile('logo'))
            {
                $path = 'users/images/'.$upinfo->logo;
                unlink($path);

                $image    = $request['logo'];
                $filename = rand(0,9999).'.'.$image->getClientOriginalExtension();
                $image->move(base_path('users/images/'),$filename);
                $upinfo->logo = $filename;
            }
            $upinfo->save();
            session()->flash('success','تم تعديل البيانات بنجاح');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
