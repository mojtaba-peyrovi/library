@extends('master')

@section('main')
    <div class="jumbotron">
                        <div class="container">


                            @include('partials.error-success')


                            <form class="form-signin" style="width:30%; margin:10% 0 20% 30%;" method="post" action="/register">
                              {{ csrf_field()}}

                              <h2 class="form-signin-heading">Please sign in</h2>

                              <label for="name" class="">Name:</label>
                              <input type="text" class="form-control"  name="name">

                              <label for="email" class="">Email address:</label>
                              <input type="email" class="form-control"  name="email">

                              <label for="password" class="">Password:</label>
                              <input type="password"  class="form-control" name="password">

                              <label for="password_confirmation" class="">re-enter your assword:</label>
                              <input type="password"  class="form-control" name="password_confirmation">


                              <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:10px;">Sign in</button>
                            </form>

                        </div>

        </div>


@endsection
