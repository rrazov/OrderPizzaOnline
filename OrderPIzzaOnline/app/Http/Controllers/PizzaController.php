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

use Illuminate\Support\Facades\Input;
class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pizzas= Product::all();

        return view('admin.showPizza',['pizzas'=> $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.createPizza');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_pizza = new Product(); 
               
        $this->validate($request,[
                'imagePath'=>'required|unique:products',
                'title'=>'required|unique:products',
                'description'=>'required',
                'price'=>'required',
            ]);

        if(Input::hasFile('imagePath')){
            $file=Input::file('imagePath');
            $file->move(public_path().'/storage/images/',$file->getClientOriginalName());

            $new_pizza->imagePath=$file->getClientOriginalName();

        }       

        $new_pizza -> title = strtoupper($request -> title);
        $new_pizza -> description = strtolower($request -> description);
        $new_pizza -> price = $request -> price;
        
        $new_pizza -> save();

        session()->flash('message','Proizvod je uspješno dodan');
        return redirect('pizza');
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
         $pizza=Product::find($id);
        return view('pizza.edit',compact('pizza'));
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
        $new_pizza = Product::find($id);        
        $this->validate($request,[
                'imagePath'=>'unique:products',
                'title'=>'required',
                'description'=>'required',
                'price'=>'required',
            ]);

        if(Input::hasFile('imagePath')){
            $file=Input::file('imagePath');
            $file->move(public_path().'/storage/images/',$file->getClientOriginalName());

            $new_pizza->imagePath=$file->getClientOriginalName();

        }    

        $new_pizza -> title = strtoupper($request -> title);
        $new_pizza -> description = $request -> description;
        $new_pizza -> price = $request -> price;
        
        $new_pizza -> save();
        session()->flash('message','Uspješno izmijenjeno');
        return redirect('pizza');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza=Product::find($id);
        $pizza->delete();
        session()->flash('message','Uspješno obrisano');
        return redirect('/pizza');
    }
}
