 @extends('layouts.master')


@section('title')
	Pizza Roko Prijava
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')

 @section('content')
 <div id="basic">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
	<div class="panel-body">
	<h1 align="center">PRIJAVI SE:</h1>
	
	@if(count($errors)>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<p>{{ $error}}</p>
		@endforeach
	</div>
	@endif
		<form action="{{ route('user.login')}}" method="post">
			<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Korisničko ime:</label>
                            
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>username
                                @endif
                            
          	</div>
			
			<div class="form-group">
				<label for="password">Lozinka:</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary" style="float: right">Prijava</button>
			{{  csrf_field() }}

		</form>
		<p >Niste registrirani?<a href="{{route('user.register')}}"> Registriraj se</a></p>
	
</div>
</div>
</div>
</div>
</div>
@endsection