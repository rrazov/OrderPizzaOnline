<?php

namespace App;

use DB;

class Cart
{
    public $items;
    public $userId=0;
    public $totalQty=0;
    public $totalPrice=0;
    public $totalPrice2=0;


    public function __construct($oldCart){
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
            $this->totalPrice2=$oldCart->totalPrice2;
            $this->userId=$oldCart->userId;

        }
    }
    public function add($item,$id,$number,$extras,$userId){

        $svi_nazivi= array();
        $storedItem = ['qty'=>0,'price'=> $item->price, 'item'=>$item, 'extras'=> $svi_nazivi];
        $item->id=$number;
        
        if($this->items){

            if(array_key_exists($number,$this->items)){
                $number = rand(10000, 100000);
                $storedItem=$this->items[$number];
            }
        }


       
        $storedItem['qty']++;
        $storedItem['price']=$item->price * $storedItem['qty'];


        if (!empty($extras)) {
            foreach ($extras as $extra) {
            $dodatak = DB::table('extras')->where('id', $extra)->first();
            $storedItem['price'] += $dodatak->price;
            array_push($storedItem['extras'], $dodatak->name);
            }
        }
            
       

        $id=$number;
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice += $storedItem['price'];

        if($this->totalPrice > 300){
            $percentage =10;
            $new_price=0;
            $new_price = $percentage / 100 * ($this->totalPrice);

            $new_price= ($this->totalPrice)- $new_price;
        }else{
            $new_price=0;   
        }

        $this->totalPrice2 =$new_price;
        $this->userId = $userId;
    }

    public function reduce($id){
        $this->items[$id]['qty']--;
        $this->totalQty--;
        $this->totalPrice -=$this->items[$id]['price'];
        
        if($this->totalPrice > 300){
            $percentage =10;
            $new_price=0;
            $new_price = $percentage / 100 * ($this->totalPrice);

            $new_price= ($this->totalPrice)- $new_price;
        }else{
            $new_price=0;   
        }

        $this->totalPrice2 =$new_price;


        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }
    
}
