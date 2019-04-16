
@extends('pizza.createPizza')

@section('editId',$pizza->id)

@section('editImagePath',$pizza->imagePath)

@section('editTitle',$pizza->title)

@section('editDescription',$pizza->description)

@section('editPrice',$pizza->price)

@section('editMethod')
    {{ method_field('PUT') }}
@endsection
