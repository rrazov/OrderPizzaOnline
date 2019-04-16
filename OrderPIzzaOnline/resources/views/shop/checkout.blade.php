@extends('layouts.master')

@section('title')
	Pizza Roko Košarica
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')
@section('content')
<div id="basic">
	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<div class="panel panel-default">
  		<div class="panel-body">
		<h1>Napomena!</h1><hr>
		<h3>Ukupno za platiti:<strong>{{$total}} kn</strong></h3>
		<form action="{{'checkout'}}" method="post" id="checkout-form">
			<div class="form-group">
				<label for="checkout"> Plaćanje kreditnom karticom<br>	
				Promjena adrese/tel. broja<br>	
				Ako vam je potreban R1 račun, navedite to u napomeni i napišite naziv subjekta, adresu i OIB.</label>
				<textarea id="checkout" name="checkout" class="form-control" value=" " placeholder="Bez napomene..."></textarea>
			</div>
			<hr>
			{{  csrf_field() }}
			<button type="submit" class="btn btn-success">Naruči</button>
			

		</form>
		</div>
		</div> 
		</div>
	</div>
	</div>

@endsection