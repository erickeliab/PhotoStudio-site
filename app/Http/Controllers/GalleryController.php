<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Service;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gall = Gallery::all();
        return view('admin.gallery')->with('galleries',$gall);
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

    public function galleryhome(){

        $gallery = Gallery::all();
        return view('galleryhome')->with('galler',$gallery);
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
            'galleryImage' => 'required|image|nullable|max:1999'
        ]);
        //handke file uploads
        if($request -> hasFile('galleryImage')){
            $file = $request -> file('galleryImage')->getClientOriginalName();
            $fileWithought = pathinfo($file , PATHINFO_FILENAME);
            $extension = $request -> file('galleryImage')-> getClientOriginalExtension();

            $filename = $fileWithought.time().'.'.$extension;

            $path = $request -> file('galleryImage')-> storeAs('public/CoverImages', $filename);
        }

        $gallery = new Gallery();
        $gallery->path = $filename;
        $gallery->save();

        return redirect('/galleries')->with('success','you have successfully added an image to the gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = $id;
        $count = Gallery::all()->count();

        $omega = Gallery::latest()->first();
        if($id !== $omega->image_id){
            
        }
       
        $next = Gallery::where('image_id','>',$id)->orderby('image_id')->limit(1)->get();
        $previous = Gallery::where('image_id','<',$id)->orderby('image_id','desc')->limit(1)->get();
        $last = Gallery::where('image_id','>',$id)->orderby('image_id','desc')->limit(1)->get();
        $first =  Gallery::where('image_id','<',$id)->orderby('image_id')->limit(1)->get();

        $begin = ($first[0]->image_id != $id) ? 1 : 0;
        $end = ($last[0]->image_id != $id) ? 1 : 0;

        $both = ($begin && $end) ? 1 : 0;
       
        $gall = Gallery::findOrFail($id);
      $arr = [
          'gall' => $gall,
          'begin' => $begin,
          'end' => $end,
          'id' => $id,
          'next' => $next,
          'previous' => $previous,
          'both' => $both
 
      ];
      //return $omega;
        return view('singephoto')->with('arr',$arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gala = Gallery::find($id);

        return view('admin.singleimg')->with('gall',$gala);
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
       
            $event = $request->input('event');
            
            
            if($event == 'add'){
                $this->validate($request,[
                    'caption' => 'required'
                ]);
                $image = Gallery::findOrFail($id);
                 $image->show = 1;
                 $image->words = $request->input('caption');
                 
                 $image->save();
                 return redirect('/slider')->with('success','The image has been added to the slideshow successful');

            }elseif($event == 'remove'){
                $image = Gallery::findOrFail($id);
                $image->show = 0;
                $image->save();
                return redirect('/slider')->with('success','The image has been removed from the slideshow successful');

            
            }elseif($event == 'service'){
                $image = Gallery::findOrFail($id); 
                $services = Service::where('serv_key',$request->input('name'))->get(); 
                $service = $services[0];
                $new = Gallery::all();
                $counter = 0;
               
                $newimg =  $service->imagepath;
                foreach ($new as $value) {
                    if($value->path == $newimg){
                        $counter++;
                    }
                }
               
                if($counter == 0 ){
                    $one = new Gallery;
                    $one->path = $newimg;
                    $one->save();
                }
                $service->imagepath = $image->path;
                
                $service->save();
                return redirect('/services')->with('success','You have successfuly updated cover of service'.$service->serv_name);

            }
            
            elseif($event == 'update'){
                $image = Gallery::findOrFail($id);
                $this->validate($request,[
                    'caption' => 'required'
                ]);
                $image->words = $request->input('caption');
                $image->save();
                return redirect('/slider')->with('success','The image has been added to the slideshow successful');

            }

            $image->save();
        return $event;
    }

    public function showslide(){

        $gall = Gallery::where('show','=','1')->get();
        return view('admin.slide')->with('galleries',$gall);
    }
    public function showothers(){

        $gall = Gallery::where('show','=','0')->get();
        return view('admin.otherpics')->with('galleries',$gall);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($image_id)
    {
        $sev = Gallery::findOrFail($image_id);
        Storage::delete('public/CoverImages/'.$sev->path);
      
        $sev -> delete();
        return redirect('/galleries')->with('success','picture successfully deleted');
    
    }
}
