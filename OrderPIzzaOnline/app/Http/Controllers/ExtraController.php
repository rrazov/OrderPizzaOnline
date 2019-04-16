<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\Extra;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras= Extra::all();

        return view('admin.showExtra',['extras'=> $extras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extra.createExtra');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $new_extra = new Extra();        
        $this->validate($request,[
                'name'=>'required|unique:extras',
                'price'=>'required',
            ]);

        $new_extra -> name = strtoupper($request -> name);
        $new_extra -> price = $request -> price;
        
        $new_extra -> save();

        session()->flash('message','Predmet je uspješno dodan');
        return redirect('extra');
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
        $extra=Extra::find($id);
        return view('extra.edit',compact('extra'));
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
         $new_extra = Extra::find($id);        
        $this->validate($request,[
                'name'=>'required',
                'price'=>'required',
            ]);

        $new_extra -> name = strtoupper($request -> name);
        $new_extra -> price = $request -> price;
        
        $new_extra -> save();
        session()->flash('message','Uspješno izmijenjeno');
        return redirect('extra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $extra=Extra::find($id);
        $extra->delete();
        session()->flash('message','Uspješno obrisan');
        return redirect('/extra');
    }
}
