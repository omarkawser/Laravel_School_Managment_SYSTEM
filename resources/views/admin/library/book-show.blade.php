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
      <th> Action</th>
      <th>Action</th>
    </thead>
    <tbody>
          @foreach($show_all_book  as $v_book)
      <tr>

        <td><img src="{{URL::to($v_book->bookcover)}}" alt="image" width="60px" height="50px"/></td>
        <td>{{$v_book->name}}<a href=""> </a></td>
        <td>{{$v_book->author}}</td>
        <td>{{$v_book->category}}</td>
        <td>{{$v_book->summary}}</td>
       
        <td>{{$v_book->bookshelf}}</td>

        <td>
        <!-- <td><a href="" class="btn btn-primary text-white ">Edit</a></td> -->
        <a href="{{URL::to ('/deletebook/'.$v_book->id)}}"  id="delete">  <button class="btn btn-outline-danger">Delete</button> </a>
          
          </td>
          

      </tr>
      @endforeach 
    </tbody>
  </table>


</div>



@endsection
