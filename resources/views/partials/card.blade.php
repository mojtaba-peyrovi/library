<div class="card" style="max-width:25%;">
  <div class="card-title">{{ $book->title }}</div>
    <div class="card-block">
      <img src="/img/3.jpg" alt="" class="card-img-top img-responsive col-xs-12" style="width:110px; height:auto;margin-left:10px;">
          <div class="book-info">
              <ul>
                    <li>

                      <span><i class="fa fa-pencil" aria-hidden="true"></i> {{ $book->author }}</span>
                    </li>

                    <li>

                      <span><i class="fa fa-bookmark" aria-hidden="true"></i><a href="#"> {{ $book->publisher }}</a></span>
                    </li>

                    <li>

                      <span><i class="fa fa-language" aria-hidden="true"></i> {{ $book->language }}</span>
                    </li>

                    <li>

                      <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ $book->date_published }}</span>
                    </li>

              </ul>
          </div>

          <a href="/book/{{ $book->id }}"><button type="button" class="btn btn-success">Read more</button></a>


    </div>
</div>
