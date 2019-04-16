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
	<h1>Profil: {{$username}} <a href="/user/profile/edit"><i class="fa fa-cog" style="font-size:30px" title="Uredi moj profil"></i></a>  </h1>
	<hr>
	<h2>Sve moje narudžbe</h2>
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
 	 <div class="panel-footer">Ukupno:  {{$order->cart->totalPrice}} kn</div>
 	 @if($order->cart->totalPrice > 300 )
		<div class="panel-footer">
		<strong>Cijena s popustom:{{$order->cart->totalPrice2}} kn</strong>
		</div>

		@endif
	</div>
	@endforeach
	</div>
	</div>
	</div>
</div>
</div>
@endsection
