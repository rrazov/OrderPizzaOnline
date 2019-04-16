@extends('layouts.new')

@section('body')

    <br>

    @if(count($errors)>0)
    <div class="alert alert-danger" align="center">
        @foreach($errors->all() as $error)
        <p>{{ $error}}</p>
        @endforeach
    </div>
    @endif
   
    <div class="bs-example">
    <form action="/user/profile/edit/update" method="POST" class="form-horizontal">

    {{ csrf_field() }}
    @section('editMethod')
    
    @show
         
        <div class="form-group">
            <label class="control-label col-xs-4" for="username">Korisničko ime:</label>
            <div class="col-xs-5">
                <input type="text" name="username" class="form-control" id="username" value="@yield('editUsername')">
            </div>
        </div>



        <div class="form-group">
            <label class="control-label col-xs-4" for="email">E-mail adresa:</label>
            <div class="col-xs-5">
                <input type="email" name="email" class="form-control" id="email" value="@yield('editEmail')">
            </div>
        </div>
       
       <div class="form-group">
            <label class="control-label col-xs-4" for="name">Ime i Prezime:</label>
            <div class="col-xs-5">
                <input type="text" name="name" class="form-control" id="name" value="@yield('editName')">
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-xs-4" for="address">Adresa:</label>
            <div class="col-xs-5">
                <input type="text" name="address" class="form-control" id="address" value="@yield('editAddress')">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="tel">Tel.:</label>
            <div class="col-xs-5">
                <input type="text" name="tel" class="form-control" id="tel" value="@yield('editTel')">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-4" for="tel">Unesite staru/novu lozinku:</label>
            <div class="col-xs-5">
                <input type="password" name="password" class="form-control" id="password" value="" placeholder="Obavezno polje ako želite izmijeniti podatke!(min. 6 znakova)">
            </div>
        </div>





        <div class="col-xs-offset-4 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Spremi">                
                <a href="/user/profile" class="btn btn-danger">Poništi</a>
        </div>
        
        
    </form>

    
</div>

    
@endsection