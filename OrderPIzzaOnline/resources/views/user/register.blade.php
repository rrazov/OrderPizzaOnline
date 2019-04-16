 @extends('layouts.master')

@section('title')
	Pizza Roko Registracija
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')

 @section('content')
<div id="basic">
<div class="row" >
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
	<div class="panel-body">
	<h1 align="center"> REGISTRACIJA</h1>
	
	
		<form action="{{ route('user.register')}}" method="post">


			 <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Korisničko ime:</label>
                            
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>username
                                @endif
                            
          	</div>

          	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                    
            </div>

             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Ime i Prezime:</label>
                            
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            
             </div>

              <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Adresa:</label>
                            
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            
              </div>

                <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-4 control-label">Tel.:</label>
                            
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" required autofocus>
                                @if ($errors->has('tel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                                @endif
                            
              </div>


			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Lozinka</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Ponovi lozinku</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>
			<button type="submit" class="btn btn-primary" style="float: right;">Registriraj se</button>
			{{  csrf_field() }}

		</form>
	
</div>
</div>
</div>	
</div>
</div>

@endsection