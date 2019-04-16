<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\AdminOrder;
use App\Extra;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;


class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders= AdminOrder::all();
       
        $orders->transform(function($order,$key){
          $order->cart=unserialize($order->cart);
          return $order;
        });
        
        return view('admin.allOrders',['orders'=> $orders]);
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
        //
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
        $adminorder=AdminOrder::find($id);
        $adminorder->delete();
        session()->flash('message','Uspješno potvrđeno!!');
        return redirect('/adminorders');
    }
}
