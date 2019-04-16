
@extends('extra.createExtra')

@section('editId',$extra->id)

@section('editName',$extra->name)

@section('editPrice',$extra->price)

@section('editMethod')
    {{ method_field('PUT') }}
@endsection
