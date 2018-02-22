@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('users.update', $user->id)}}" method="POST">
          {{method_field('PUT')}}
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
          <label for="surname" class="label">Surname:</label>
            <p class="control">
              <input type="text" class="input" name="surname" id="surname" value="{{$user->surname}}">
            </p>
          </div>

          <div class="field">
          <label for="surname" class="label">City:</label>
          <p class="control">
            <input type="text" class="input" name="city" id="city" value="{{$user->city}}">
          </p>
        </div>

        <div class="field">
                <label for="country" class="label">Country:</label>
                <p class="control">
                  <input type="text" class="input" name="country" id="country" value="{{$user->country}}">
                </p>
              </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

    
          <button class="button is-primary">Edit User</button>
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep'
      }
    });

  </script>
@endsection
