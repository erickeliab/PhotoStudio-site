<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Order;

class PagesController extends Controller
{

    //PUBLIC ROUTES FUNCTIONS

    public function index(){
        $services = Service::all();

        
        return view('index')->with('services',$services);
       }

       public function about(){
           $users = User::all();
        return view('about')->with('users',$users);
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

   
   
    public function adm(){
        return view('admin.dashboard');
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
