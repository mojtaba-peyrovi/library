@extends('master')


@section('main')

  <div class="jumbotron">


    <div class="books-container">
      <div class="row">



  @foreach ($books as $book)

        @include('partials.card')

  @endforeach

  @include('partials.modal')





        </div>
      </div>

</div>

@endsection
