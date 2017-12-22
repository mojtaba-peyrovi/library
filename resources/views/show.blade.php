@include('master')

<div class="container single col-md-8" style="background-color:white;margin-top:5%;float:right;">
    <div class="row">
      <div class=" single-img">
          <img src="/img/2.jpg" alt="" style="margin: 2%;">
      </div>
      <div class="single-info">
          <div class="single-title">{{ $book->title }}</div>
          <hr>

          <div class="author" style="margin-left:3%;">
            <span>by(author)</span>
            <span> {{ $book->author }} |</span>
            <span> Date published: {{ $book->date_published }} |</span>
                  <div class="about">
                    {{ $book->about }}
                  </div>

                  <div class="category" style="margin:5% 0 2% 0;">
                        Category: <a href="#">{{$book->category}} </a>
                  </div>

                  <div class="added-by">
                        Added by: <a href="#">{{$book->name }} </a>
                  </div>


          </div>
      </div>
    </div>


</div>
