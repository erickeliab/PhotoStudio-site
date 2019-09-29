<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class approvedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
    }

    
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

   
    


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);
        $orders = Order::findOrFail($id);

        $orders->approved = 0;

        if($request->input('appro') == 0){

            //$orders->comment = $request->input('comment');

        }

        $orders->save();
        return redirect('/orders/'.$id)->with('success','order successfully Disapproved');
    }



 
    public function destroy($id)
    {
        //
    }
}
