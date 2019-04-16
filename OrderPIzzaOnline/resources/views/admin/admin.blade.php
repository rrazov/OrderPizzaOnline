@extends('layouts.master')

@section('title')
	Pizza Roko Admin
@endsection('title')
@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')
@section('content')


<div id="basic">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <div class="panel panel-default">
                           
                <div class="panel-heading"><a href="pizza" style="color:black"><center><strong>PROIZVODI</strong> </center></a></div>              
                <div class="panel-heading"><a href="extra" style="color:black"><center><strong>DODACI</strong> </center> </a></div>
                <div class="panel-heading"><a href="adminorders" style="color:black"><center><strong> NARUDŽBE ({{$orders}})</strong></center> </a></div>
           
            </div>
        </div>
    </div>
</div>
@endsection
