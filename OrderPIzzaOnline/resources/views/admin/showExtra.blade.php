@extends('layouts.master')
@section('title')
    Pizza Roko Admin
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="/css/responsee.css">
@endsection('styles')

@section('content')

@if(session()->has('message'))
<h4 style="size: 10px" class="alert alert-success" align="center">{{ session()->get('message') }}</h4>
@endif


<div id="basic">
<div class="panel-body" align="center" >
    <table>
        
        <tr>
            <th>Dodaci</th>
            <th>Uredi</th>
            <th> Obriši</th>
        </tr>
        @foreach ($extras as $extra)
        <tr>
            <td>
                {{ ($extra -> name)}}&nbsp [{{$extra->price}} kn]</a>
            </td>
            <td class="active">
                
                &nbsp<a href="{{'extra/'.$extra->id.'/edit'}}"><i class="fa fa-pencil" style="font-size:30px" title="Uredi"></i></a> &nbsp &nbsp &nbsp &nbsp
            </td>
            <td align="left">
                <form action="{{ '/extra/'.$extra->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    &nbsp<button type="submit"><i class="fa fa-trash" aria-hidden="true" style="color:#b30000" title="Obriši"></i></button>
                    
                  </form>
            </td>
        </tr>
        @endforeach
        <tr>
            
            <th ><a href="extra/create" class="btn btn-info" >Novi dodatak</a><hr></th>        
        </tr>
        <tr> <th><a href="/admin">Povratak</a></th> </tr>
    </table>
</div>
</div>
@endsection