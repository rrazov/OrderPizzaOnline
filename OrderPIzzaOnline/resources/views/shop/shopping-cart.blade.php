@extends('layouts.master')

@section('title')
	Pizza Roko Košarica
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')

@section('content')
 <div id="basic">
	@if(Session::has('cart'))
		<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Za kupnju iznad 300 kn dobivate popust od 10%!!!! </strong>
		</div>
  		<div class="panel-body">
  		
			<ul class="list-group">
				@foreach($products as $product )
				<li class="list-group-item">
					<strong>{{$product['item']['title']}}</strong>
					<span class="label label-success">{{$product['price']}} kn</span><span>&nbsp; @foreach($product['extras'] as $extra ) <strong>|</strong>{{$extra}} @endforeach</span>
					<div class="btn" ><a href="{{route('product.reduce',['id'=>$product['item']['id']])}}"><i class="fa fa-trash" aria-hidden="true" style="color:#b30000;font-size:18px " title="Obriši"></i></a></div>						
					
				</li>
				@endforeach
			</ul>
			</div>
			<div class="panel-footer">
			<strong>Ukupno: {{$totalPrice}}kn</strong>
			</div>
			@if($totalPrice2 > 0 )
			<div class="panel-footer">
			<strong>Cijena s popustom:{{$totalPrice2}} kn</strong>
			</div>

			@endif

		</div>
		
		</div>
		</div> 
		
		<hr>
		<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<a  href="checkout" type="button" class="btn btn-success"> Naruči</a>
			</div>
		</div>

	@else
			<div class="row " align="center">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h2>Nema proizvoda u košarici!</h2>
			</div>
		</div>	
			
	@endif
</div>	
@endsection	