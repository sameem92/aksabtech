<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\setting;
use App\contact;
use App\order;
use App\service;
use App\lastwork;
use App\ourtool;
use App\ourclient;
use App\clientscomment;
use App\blog;
use App\package;
use App\work;
use App\appliedwork;
use DB;


class HomeController  extends Controller
{
    public function home()
    {
        $page         = 'home' ;
        $pageID       = 0;
        $settinginfo  = DB::table('settings')->first();
        $allservices  = service::where('parent',0)->orderBy('id','desc')->get();
        $lastworks    =  lastwork::get();
        $ourtools     = ourtool::get();
        $ourclients   = ourclient::get();
        $allcomments  = clientscomment::get();
        return view('front.home',compact('settinginfo','allservices','page','pageID','lastworks','ourtools','allcomments','ourclients'));
    }

    public function privacy()
    {
        $settinginfo  = DB::table('settings')->first();
        $page         = 'privacy' ;
        $pageID       = 0;
        return view('front.privacy',compact('page','pageID','settinginfo'));
    }

    public function policy()
    {
        $settinginfo  = DB::table('settings')->first();
        $page         = 'policy';
        $pageID       = 0;
        return view('front.policy',compact('page','pageID','settinginfo'));
    }

    public function contactus(Request $request)
    {
        $settinginfo  = DB::table('settings')->first();
        $services     = service::where('parent',0)->get();
        $page         = 'contactus' ;
        $pageID       = 0;
        return view('front.contactus',compact('page','pageID','settinginfo','services'));
    }

    public function blog(Request $request)
    {
        $settinginfo  = DB::table('settings')->first();
        $blogs        = blog::get();
        $page         = 'blog';
        $pageID       = 0;
        return view('front.blog',compact('page','pageID','settinginfo','blogs'));
    }

    public function showblog($id)
    {
        $settinginfo  = DB::table('settings')->first();
        $showblog     = blog::findorfail($id);
        $page         = 'blog';
        $pageID       = 0;
        return view('front.showblog',compact('page','pageID','settinginfo','showblog'));
    }

    public function services(Request $request)
    {
        $settinginfo  = DB::table('settings')->first();
        $services     = service::where('parent',0)->get();
        $page         = 'services';
        $pageID       = 0;
        $ourtools     = ourtool::get();
        $allcomments  = clientscomment::get();
        return view('front.services',compact('page','pageID','settinginfo','services','ourtools','allcomments'));
    }

    public function showservice($id)
    {
        $settinginfo  = DB::table('settings')->first();
        $showservice  = service::where('parent',0)->findorfail($id);
        $allservices  = service::where('parent',0)->get();
        $page         = 'services';
        $pageID       = $id;
        $ourtools     = ourtool::get();
        $allcomments  = clientscomment::get();
        $subservices  = service::where('parent',$id)->get();
        $packages     = package::where('service_id',$id)->get();
        return view('front.showservice',compact('page','pageID','settinginfo','showservice','allservices','ourtools','allcomments','subservices','packages'));
    }

    public function works(Request $request)
    {
        $settinginfo  = DB::table('settings')->first();
        $works        = work::where('parent',0)->get();
        $services  = service::where('parent',0)->get();
        $page         = 'works';
        $pageID       = 0;
        $ourtools     = ourtool::get();
        $allcomments  = clientscomment::get();
        $appliedworks = appliedwork::get();
        return view('front.works',compact('page','pageID','settinginfo','works','ourtools','allcomments','appliedworks','services'));
    }

    public function showwork($id)
    {
        $settinginfo  = DB::table('settings')->first();
        $showwork     = work::where('parent',0)->findorfail($id);
        $works        = work::where('parent',0)->get();
        $services     = service::where('parent',0)->get();
        $page         = 'works';
        $pageID       = $id;
        $ourtools     = ourtool::get();
        $allcomments  = clientscomment::get();
        $subworks     = work::where('parent',$id)->get();
        $appliedworks = appliedwork::where('work_id',$id)->get();
        return view('front.showwork',compact('page','pageID','settinginfo','showwork','works','services','ourtools','allcomments','subworks','appliedworks'));
    }

    public function aboutus(Request $request)
    {
        $settinginfo  = DB::table('settings')->first();
        $ourtools     = ourtool::get();
        $ourclients   = ourclient::get();
        $allcomments  = clientscomment::get();
        $page         = 'aboutus' ;
        $pageID       = 0;
        return view('front.aboutus',compact('page','pageID','settinginfo','ourtools','ourclients','allcomments'));
    }

    public function addorder(Request $request)
    {
        order::create($request->all());
        return back();
    }

}
