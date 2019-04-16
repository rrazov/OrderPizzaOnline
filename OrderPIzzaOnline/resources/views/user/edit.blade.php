
@extends('user.profileUser')

@section('editId',$user->id)

@section('editUsername',$user->username)

@section('editEmail',$user->email)

@section('editName',$user->name)

@section('editAddress',$user->address)

@section('editTel',$user->tel)

@section('editPassword',$user->password)

@section('editMethod')
    {{ method_field('PUT') }}
@endsection
