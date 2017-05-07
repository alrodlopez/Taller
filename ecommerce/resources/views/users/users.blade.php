@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuario Vendedor Datos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <h1>Datos</h1>
            @foreach($users as $user)
            <tr><td>ID</td><td>{{$user->id}}</td></tr>
            <tr><td>Name</td><td>{{$user->name}}</td></tr>
            <tr><td>Email</td><td>{{$user->email}}</td></tr>
            <tr><td>Password</td><td>{{$user->password}}</td></tr>
            </thead>
            @endforeach
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/users/'.$user->id).'/edit'}}" class="btn btn-primary btn-fab">
            Modificar Datos
        </a>
    </div>
@endsection