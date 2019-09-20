<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $this->middleware('auth',['except' => ['show']]);
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
            'CoverImage' => 'image|nullable|max:1999'
        ]);

            //Hndle fileupload
            if($request -> hasFile('CoverImage')){
                $file = $request -> file('CoverImage')->getClientOriginalName();
                $fileWithought = pathinfo($file , PATHINFO_FILENAME);
                $extension = $request -> file('CoverImage')-> getClientOriginalExtension();

                $filename = $fileWithought.time().'.'.$extension;

                $path = $request -> file('CoverImage')-> storeAs('public/CoverImages', $filename);
            }else{
                $filename = 'defaultImage.jpeg';
            }


      $service = new Service;

      $service -> serv_descr = $request -> input('serv_descr');
      $service -> price = $request -> input('price');
      $service -> serv_name = $request -> input('name');
      $keying = $request -> input('name');
      $key = $keying[0].time();
      $service -> serv_key = $key;
      $service -> imagepath = $filename;
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
       return view('admin.service')->with('services',$serv);
        
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
            'CoverImage' => 'image|nullable|max:1999'
        ]);
              //Hndle fileupload
              if($request -> hasFile('CoverImage')){
                $file = $request -> file('CoverImage')->getClientOriginalName();
                $fileWithought = pathinfo($file , PATHINFO_FILENAME);
                $extension = $request -> file('CoverImage')-> getClientOriginalExtension();

                $filename = $fileWithought.time().'.'.$extension;

                $path = $request -> file('CoverImage')-> storeAs('public/CoverImages', $filename);
            }
      $service = Service::find($id);

      $service -> serv_descr = $request -> input('serv_descr');
      $service -> price = $request -> input('price');
      $service -> serv_name = $request -> input('name');
      $service -> imagepath = $filename;
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
        if($sev -> imagepath != 'DefaultImage.jpeg'){
            
            Storage::delete('public/CoverImages/'.$sev->imagepath);
            
        }
        $sev -> delete();
        return redirect('/services')->with('success','service successfully deleted');
    }
}
