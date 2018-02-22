@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="collumns">
            <div class="collumn">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add"></i>Create new User</a>
            </div>
        </div>
    </div>
@endsection