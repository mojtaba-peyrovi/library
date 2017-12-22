@include('master')

<div class="row"  style="background-color:#9900e6;margin-top:-10px;padding: 10px 0 10px 0;">
    <h1 style="color:white;margin-left:35%;">Add a new book</h1>
</div>

<div class="container col-md-8" style="margin-top:30px;margin-left:30%;">



@include('partials.error-success')

<form method="post" action="/books/create">

  {{csrf_field()}}

  <div class="row">
        <div class="form-left" style="margin-right:10%;width:30%;">
            <div class="form-group">
            <label for="title">Book title</label>
            <input type="text" class="form-control" name="title">
            </div>

                <div class="form-group">
                <label for="category">Book category</label>
                <select class="form-control" name="category">

                <option disabled selected value> -- select a category -- </option>
                <option>Kids</option>
                <option>Science</option>
                <option>Fiction</option>
                <option>History</option>

                </select>
                </div>

                <div class="form-group">
                <label for="language">Book language</label>
                <input type="text" class="form-control" name="language">
                </div>

                <div class="form-group">
                <label for="date_published">Date published</label><span>(yyyy/mm/dd)</span>
                <input type="text" class="form-control" id="dep-amount" name="date_published">
                </div>

                <div class="form-group">
                <label for="author">Book Author</label>
                <input type="text" class="form-control" name="author">
                </div>

                <div class="form-group">
                <label for="publisher">Book publisher</label>
                <input type="text" class="form-control" name="publisher">
                </div>

          </div>

          <div class="form-right">
                  <div class="form-group">
                  <label for="about">About this book</label>
                  <textarea name="about" rows="15" cols="80" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                  <label for="country_published">Country published at</label>
                  <input type="text" class="form-control" name="country_published">
                  </div>
          </div>


            <input type="submit" value="Add book" class="btn btn-primary btn-block">

      </div>
</form>
</div>
