<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\AdminOrder;
use Auth;
use Session;


class UserController extends Controller
{
    public function getRegister(){
    	return view('user.register');
    }

    public function getAdmin(){
      $orders=AdminOrder::count();
      //$orders->ukupno();
      return view('admin.admin',['orders'=>$orders]);
      
    }

    public function postRegister(Request $request){
    	$this->validate($request,[
    		'username'=>'required|min:6|unique:users',
    		'email'=>'email|required|unique:users',
        'name'=>'required',
        'address'=>'required',
        'tel'=>'required',
    		'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6'

    		]);

    	$user=new User([
    		'username'=>$request->input('username'),
    		'email'=>$request->input('email'),
        'name'=>$request->input('name'),
        'address'=>$request->input('address'),
        'tel'=>$request->input('tel'),
    		'password'=> bcrypt($request->input('password'))
    		]);

    	$user->save();
      
      Auth::login($user);

      if (session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
              }

    	return redirect()->route('user.profile');
    }

    public function getLogin(){
        return view ('user.login');
    }
     public function postLogin(Request $request){
        $this->validate($request,[
            'username'=>'required|min:6',
            'password'=>'required|min:6'
        ]);

        if (Auth::attempt(['username'=> $request->input('username'),'password'=>$request->input('password')])){
              if (session::has('oldUrl')) {
                $oldUrl=Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
              }
              return redirect()->route('user.profile');
          }
          return redirect()->back();
      }

      public function getProfile(){
        $orders=Auth::user()->orders;
        $username=Auth::user()->username;
        $id=Auth::user()->id;


        $orders->transform(function($order,$key){
          $order->cart=unserialize($order->cart); 
          return $order;
        });
        return view('user.profile',['orders'=>$orders,'username'=>$username,'id'=>$id ]);
      }

      public function getLogout(){
        Session::forget('oldUrl');
        Auth::logout();

        return redirect()->route('user.login');
      }



      public function editProfile(){
        $id = Auth::id();
        $user=User::find($id);
        return view('user.edit',['user'=>$user]);
      }
      

      public function update(Request $request){
        $id = Auth::id();
        $new_user = User::find($id);

        $this->validate($request,[
                'username'=>'required|min:6',
                'email'=>'email|required',
                'name'=>'required',
                'address'=>'required',
                'tel'=>'required',
                'password'=>'required|min:6',
            ]);

        $new_user -> username = $request -> username;
        $new_user -> email = $request -> email;
        $new_user -> name = $request -> name;
        $new_user -> address = $request -> address;
        $new_user -> tel = $request -> tel;
        $new_user -> password =  bcrypt($request -> password);

        
        $new_user -> save();
        session()->flash('message','Uspješno izmijenjeno');
        
        return redirect()->route('user.profile');
      }


}
