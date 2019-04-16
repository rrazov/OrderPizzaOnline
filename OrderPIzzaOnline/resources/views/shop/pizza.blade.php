@extends('layouts.master')

@section('title')
	Pizza Roko Ponuda
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="css/responsee.css">

@endsection('styles')
@section('content')
<div id="basic">
@if(Session::has('success'))
  <div class="row">
    <div class="col-md-4 col-md-offset-4" align="center">
      <div id="message" class="alert alert-success">{{Session::get('success')}}</div>
    </div>
  </div>
@endif
@foreach($products->chunk(3) as $productChunk)
<div class="row">
@foreach($productChunk as $product)

<form action="{{route('product.addToCart', ['id'=>$product->id])}}" method="get">
 
  
 <div class="col-sm-6 col-md-4">
	<div class="thumbnail">
      <img src="storage/images/{{ $product->imagePath }}" alt="Image_01" class="img-responsive" />
      <div class="caption">
      
        <h3>{{ $product->title }} {{ $product->price }} kn</h3> 
        <button type="submit" class="btn btn-success pull-right">Dodaj</button>
        <p class="description">{{ $product->description }}</p>
        <div class="clearfix">

        <div class="extras">

          <h3>Dodaci:</h3>
             @foreach($extras as $extra)  
               <label>
                <input type="checkbox" name="dodaci[]" value="{{$extra->id}}"> <label>{{$extra->name}} ({{$extra->price}}kn)</label>
              </label>
    
              @endforeach
        </div>

        
        </div>
        
  </div>
  </div>
  </div>

  </form>
@endforeach
 </div>
@endforeach
</div>
@endsection