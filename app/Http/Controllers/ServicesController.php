<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;

class ServicesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.admservices')-> with('services',$service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addservice');
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
        $this -> validate ($request, [
            'serv_descr' => 'required',
            'price' => 'required',
            'name' => 'required',
        ]);


      $service = new Service;

      $service -> serv_descr = $request -> input('serv_descr');
      $service -> price = $request -> input('price');
      $service -> serv_name = $request -> input('name');
      $service -> imagepath = $request -> input('path');
      $service -> save();

     return redirect('/services')->with('success','Service Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        
     
        $serv = Service::find($id);
       return view('service')->with('services',$serv);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servic = Service::find($id);
        return view('admin.editservice')->with('services',$servic);
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
        $this -> validate ($request, [
            'serv_descr' => 'required',
            'price' => 'required',
            'name' => 'required',
        ]);


      $service = Service::find($id);

      $service -> serv_descr = $request -> input('serv_descr');
      $service -> price = $request -> input('price');
      $service -> serv_name = $request -> input('name');
      $service -> imagepath = $request -> input('path');
      $service -> save();

     return redirect('/services')->with('success','Service successfully Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sev = Service::find($id);

        $sev -> delete();
        return redirect('/services')->with('success','service successfully deleted');
    }
}
