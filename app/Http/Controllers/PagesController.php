<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PagesController extends Controller
{

    //PUBLIC ROUTES FUNCTIONS

    public function index(){
        $services = Service::all();

        
        return view('index')->with('services',$services);
       }

       public function about(){
        return view('about');
       }

       public function contact(){
        return view('contact');
       }

       public function service(){
        return view('service');
       }

       public function services(){

        $services = Service::all();
        return view('services')->with('services',$services);
       }

    //DASHBOARD ROUTES CONTROLLER FUNCTIONS

    public function getregister(){
       
        return view('admin.adduser');
    }
    public function home(){
     return view('admin.dashboard');
    }

    public function adm(){
        return view('admin.dashboardmin.dashboard');
       }

       public function admnserv(){
        return view('admin.admservices');
       }

       public function admmessages(){
        return view('admin.messages');       }

       public function usercreate(){
        return view('admin.createuser');
       }

       public function loginform(){
        return view('admin.login');
       }

       public function messages(){
        return view('admin.messages');
       }

       public function orders(){
        return view('admin.oders');
       }

       


}
