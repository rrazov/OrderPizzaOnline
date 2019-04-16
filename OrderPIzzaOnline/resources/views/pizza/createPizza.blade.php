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
    <form action="/pizza/@yield('editId')" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    @section('editMethod')
    
    @show
         <div class="form-group">
            <label class="control-label col-xs-3" for="imagePath">Slika:</label>
            <div class="col-xs-5">
                <input type="file" name="imagePath" class="form-control" id="imagePath"  value="@yield('editImagePath')">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="title">Naziv:</label>
            <div class="col-xs-5">
                <input type="text" name="title" class="form-control" id="title" placeholder="Naziv" value="@yield('editTitle')">
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-xs-3" for="description">Opis:</label>
            <div class="col-xs-5">
                <input type="text" name="description" class="form-control" id="description" placeholder="Opis" value="@yield('editDescription')">
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
                <a href="/pizza" class="btn btn-danger">Poništi</a>
        </div>
        
        
    </form>

    
</div>

    
@endsection