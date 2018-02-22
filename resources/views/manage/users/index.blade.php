@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="collumns">
            <div class="collumn">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary"><i></i>Create new User</a>
            </div>
        </div>
        <hr>
       
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>surname</th>
                    <th>city</th>
                    <th>country</th>
                    <th>email</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                       <td>{{$user->city}}</td>
                       <td>{{$user->country}}</td>
                       <td>{{$user->email}}</td>
                       <td>{{$user->created_at}}</td>
                       <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
       {{$users->links()}}
    </div>
@endsection