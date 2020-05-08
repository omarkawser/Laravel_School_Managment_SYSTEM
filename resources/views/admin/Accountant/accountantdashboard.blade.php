@extends('layout')


@section('content')


<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Accountant's Expenses Overview
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="row">





        </div>
        </div>
      </div>
    </div>

<a href="" class="btn btn-primary">Import CSV</a>



<div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="get">
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
        <th>ID</th>
        <th>Title</th>
        <th>Name</th>
        <th>Value</th>
        <th>Type</th>

      </thead>
      <tbody>
        @foreach ($expenses as $expense)
        <tr>


          <td>{{ $expense->id}}</a></td>
          <td>{{ $expense->title}}</td>
          <td>{{ $expense->name }}</td>
          <td>{{ $expense->value }}</td>

          <td>{{ $expense->type }}</td>

          <td><a href = "{{URL::to('/deleteexpense/'.$expense->id)}}" class="btn btn-danger text-white ">Delete</a></td>

        </tr>
        @endforeach
      </tbody>
    </table>


@endsection





