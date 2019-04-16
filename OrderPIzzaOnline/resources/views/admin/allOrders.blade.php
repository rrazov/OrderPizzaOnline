 @extends('layouts.master')


@section('title')
	Pizza Roko Profil
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')



 @section('content')

 @if(session()->has('message'))
<h4 style="size: 10px" class="alert alert-success" align="center">{{ session()->get('message') }}</h4>
@endif

<div id="basic">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
  	<div class="panel-body">
	<h2>Sve narudžbe! </h2><hr>
	@foreach($orders as $order)
	<div class="panel panel-default">
  	<div class="panel-body">
    	<ul class="list-group">
    		@foreach($order->cart->items as $item)
  			<li class="list-group-item">
  			<span class="badge">{{$item['price']}} kn</span>
  			<strong>{{$item['item']['title']}} </strong> @foreach($item['extras'] as $key => $extra) | {{$extra}} @endforeach
  			</li>
  			@endforeach
  		</ul>
 	 </div>
   <div class="panel-footer"> Kupac: {{$order->userinfo1()}} |  {{$order->userinfo2()}}  |  {{$order->userinfo3()}}</div>
 	 <div class="panel-footer"> Ukupno: {{$order->cart->totalPrice}} kn  
 	 <span> @if($order->checkout!='...') <li>{{$order->checkout}}</li> @endif </div>
   @if($order->cart->totalPrice > 300 )
    <div class="panel-footer">
    <strong>Cijena s popustom:{{$order->cart->totalPrice2}} kn</strong>
    </div>

    @endif
</span>
 		<div class="panel-footer"> <form action="{{ '/adminorders/'.$order->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                   Potvrdi ako je narudžba gotova! &nbsp <button type="submit" class="pull-right"><i class="fa fa-check" aria-hidden="true" style="color:#00cc00" title="Potvrdi" ></i></button>
                    
        </form></div> 
 	 </div>

 	 
	@endforeach
	<a href="/admin">Povratak</a>
	</div>

	</div>
	</div>
</div>
</div>
@endsection
