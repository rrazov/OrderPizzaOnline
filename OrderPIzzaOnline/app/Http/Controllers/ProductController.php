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
use App\AdminOrder;
class ProductController extends Controller
{
    public function getPizza()
    {
        $products= Product::all();
        $extras= Extra::all();

        return view('shop.pizza',['products'=> $products,'extras'=>$extras]);
    }

    public function getIndex()
    {
        return view('index.index');
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $number = rand(10000, 100000);


        $userId = Auth::id();
        if ($userId === null){
            $userId=0;
        }

        if ($request->input('dodaci')) {
              $extras = $request->input('dodaci');
        }else{
            $extras= array();
        }


        $oldCart= Session::has('cart')?Session::get('cart'):null;

        
        $cart =new Cart($oldCart);
        $cart->add($product,$product->id,$number,$extras,$userId);

        $request->session()->put('cart',$cart);
        
        return redirect()->route('product.pizza');



    }

    public function getReduce($id){
        $oldCart= Session::has('cart')?Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->reduce($id);

         if(count($cart->items) >0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        
        return redirect()->route('product.shoppingCart');
    }


    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart =new Cart($oldCart);
        $oldId=$cart->userId;
        $id = Auth::id();

        if(($oldId == 0) || ( $oldId == $id)){
            
             return view ('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalPrice2'=>$cart->totalPrice2,'userId'=>$oldId ]);
        }else{
            Session::forget('cart');
            return view('shop.shopping-cart');

        }



        return view ('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalPrice2'=>$cart->totalPrice2,'userId'=>$userId ]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);

        $total=$cart->totalPrice;
        $total2=$cart->totalPrice2;

        if ($total > 300) {
            $total = $total2;
        }
        return view('shop.checkout',['total'=>$total]);

    }
      public function postCheckout(Request $request)
      {
        if(!Session::has('cart')){
            return redirect()-> route('shop.shoppingCart');
        }
             $oldCart=Session::get('cart');
             $cart=new Cart($oldCart);

             $order= new Order();
             $order->cart =serialize($cart);
             $order->checkout =$request->input('checkout');


             if ($order->checkout==null) {
               $order->checkout='...';
             }

             $orderA=new AdminOrder();
             $orderA->cart=serialize($cart);

             $orderA->checkout =$request->input('checkout');
             if ($orderA->checkout==null) {
               $orderA->checkout='...';
             }

             
             Auth::user()->orders()->save($order);
             Auth::user()->ordersA()->save($orderA);
        
            Session::forget('cart');
            return redirect()->route('product.pizza')->with('success','Hvala vam na kupnji!');
    }


    
}
