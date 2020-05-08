@extends('layout')


@section('content')


<div class="container">

<div class="row justify-content-center">
      <div class="col-md-8">
          <form action="" method="">
            <div class="input-group">
              <input type="search" class="form-control" name="search">
              <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
              </span>
            </div>
          </form>
      </div>
  </div>


<table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <th>Picture</th>
      <th>Name</th>
      <th>Author</th>
      <th>Category</th>
      <th>Summary</th>
      <th>Bookshelf</th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
   
      <tr>

        <td><img src="" alt="image" width="60px" height="50px"/></td>
        <td><a href="">    fffff</a></td>
        <td>gggg</td>
        <td>gggg</td>
        <td>gggg</td>
       
        <td>gggg</td>
        <td><a href="" class="btn btn-primary text-white ">Edit</a></td>
        <td><a href = '' class="btn btn-danger text-white ">Delete</a></td>

      </tr>

    </tbody>
  </table>


</div>









@endsection