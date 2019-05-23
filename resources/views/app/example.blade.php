@extends('layouts.base')
@section('content')
    Los Usuarios son: {{count($users)}}
    @foreach($users as $user)
        Id = {{$user['id']}} Nombre = {{$user['name']}}
    @endforeach
@endsection