<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
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

        $user = User::all();
        if(auth()->user()->Authority !== 'admin'){
            return redirect('/dashboards')->with('error','Unauthorized Page');
        }else
        return view('admin.users')->with('users',$user);

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
    public function getregister(){
        if(auth()->user()->Authority !== 'admin'){
            return redirect('/dashboards')->with('error','Unauthorized Page');
        }else
        return view('admin.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->Authority !== 'admin'){
            return redirect('/dashboards')->with('error','Unauthorized Page');
        }else

        $this -> validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            
        ]);

               //Hndle fileupload
               if($request -> hasFile('CoverImage')){
                $file = $request -> file('CoverImage')->getClientOriginalName();
                $fileWithought = pathinfo($file , PATHINFO_FILENAME);
                $extension = $request -> file('CoverImage')-> getClientOriginalExtension();

                $filename = $fileWithought.time().'.'.$extension;

                $path = $request -> file('CoverImage')-> storeAs('public/CoverImages', $filename);
            }else{
                $filename = 'defaultUser.png';
            }


        $user = new User;
        $user->name =$request -> input('name');
        $user->phone =$request -> input('phone');
        $user->email =$request -> input('email');
        $passwd = $request -> input('password');
        $user->userimg =  $filename;
        $passwdnew = $request -> input('password');
        $pass = array('password' => $passwd );
        $user->password =Hash::make($pass['password']);

        if($passwd === $passwdnew){
            $user -> save();

            return redirect('/users')->with('success','Yoh, you have successfully adden user called '.$user->name.'.');
           
        }else{
            return redirect('/aduser')->with('error','Your passwords didn\'t match');

        }
        //return view('admin.users')->with('success','Yoh you have successfully adden user'.$user->name.'.')->with('users',$user);

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
    { if(auth()->user()->Authority !== 'admin'){
        return redirect('/dashboards')->with('error','Unauthorized Page');
    }else
        $usr = User::findOrFail($id);

        return view('admin.edituser')->with('user',$usr);
       
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
        if(auth()->user()->Authority !== 'admin'){
            return redirect('/dashboards')->with('error','Unauthorized Page');
        }else
       
        //the default image;
        $filename = 'storage/CoverImages/cameraman1567754938.jpg';

        //checking if the image is selected
        
        if($request -> hasFile('CoverImage')){
            $file = $request -> file('CoverImage')->getClientOriginalName();
            $fileWithought = pathinfo($file , PATHINFO_FILENAME);
            $extension = $request -> file('CoverImage')-> getClientOriginalExtension();

            $filename = $fileWithought.time().'.'.$extension;

            $path = $request -> file('CoverImage')-> storeAs('public/CoverImages', $filename);
        }
        $user = User::find($id);

        $user->userimg =  $filename;

        if($request -> input('name')){
            $user->name =$request -> input('name');
        }
        
        if($request -> input('phone')){
            $user->phone =$request -> input('phone');
        }
        
        if($request -> input('email')){ 
             $user->email =$request -> input('email');
            }

            if($request -> input('Authority') == 'A'){ 
                $user->Authority = 'admin';
               }
      
        if($request -> input('password') && $request -> input('password')){
          
            $passwd = $request -> input('password');
        
        
        $passwdnew = $request -> input('newpassword');
        $pass = array('password' => $passwd );
        

        if($passwd === $passwdnew){
            $user->password = Hash::make($pass['password']);
        }else{
            return redirect('/users/'.$id.'/edit')->with('error','Your passwords didn\'t match');

        }
   
    }
            $user -> save();

            return redirect('/users')->with('success','Yoh, you have successfully updated user called '.$user->name.'.');
           
        }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

      
        
        if(auth()->user()->Authority !== 'admin'){
            return redirect('/admin.dashboards')->with('error','Unauthorized Page');
        }else
        $user = User::findOrFail($id);

        //generating the message to the frontend
        $var = ($user->activated)?'deactivated':'activated';

        //Deacttivating and activating the user to the database by password swap
        if($user->activated){
            $user->actkey = $user->password;
            $user->password = Hash::make('key2key');
        }else {
            if($user->actkey !== NULL){
            $user->password = $user->actkey;
            }
        }
        
        //updating the activation boolean value to the database
        $user->activated = !$user->activated;
       
        $user -> save();


        return redirect('/users')->with('success','user called '.$user->name.' successfully '.$var);
    }
}
