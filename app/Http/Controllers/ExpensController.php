<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expens;

class ExpensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expens = Expens::all();
        return view('admin.expenditures')->with('expens',$expens);
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
      
        $this -> validate($request,[
            'title' => ['required','string'], 
            'body' => ['required','string'], 
            'amount' => ['required','string']
        ]);

            $ex = new Expens;
            $ex -> tittle = $request->input('title');
            $ex -> body = $request -> input('body');
            $ex -> amount = $request -> input('amount');

            $ex->save();

            return redirect('/expens')->with('success','You have successfully added an item to the expence list');
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
        //
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
