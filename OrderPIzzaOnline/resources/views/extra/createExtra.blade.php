@extends('layouts.new')

@section('body')
   @if(count($errors)>0)
    <div class="alert alert-danger" align="center">
        @foreach($errors->all() as $error)
        <p>{{ $error}}</p>
        @endforeach
    </div>
    @endif

    <br>

   
    <div class="bs-example">
    <form action="/extra/@yield('editId')" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    @section('editMethod')
    
    @show
        
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="name">Ime:</label>
            <div class="col-xs-5">
                <input type="text" name="name" class="form-control" id="name" placeholder="Naziv" value="@yield('editName')">
            </div>
        </div>
       
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="price">Cijena:</label>
            <div class="col-xs-1">
                <input type="number" class="form-control" min="1"  name="price" value="@yield('editPrice')">
            </div>
        </div>


        <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Spremi">                
                <a href="/extra" class="btn btn-danger">Poništi</a>
        </div>
        
        
    </form>

    
</div>

    
@endsection