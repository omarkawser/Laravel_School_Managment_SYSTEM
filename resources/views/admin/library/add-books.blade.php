@extends('layout')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Book</div>

                <div class="card-body">
                  <form method="post" action="{{URL::to('/save_book')}}" enctype="multipart/form-data">

                    @csrf 
                  <div class="form-group row">
                      <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Book Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name"  required autofocus>


                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                      <div class="col-md-6">
                          <input id="author" type="text" class="form-control" name="author" required>


                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                      <div class="col-md-6">
                          <input id="category" type="text" class="form-control" name="category" required>


                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="summary" class="col-md-4 col-form-label text-md-right">{{ __('Summary') }}</label>

                      <div class="col-md-6">
                          <input id="summary" type="text" class="form-control" name="summary" required>


                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="bookshelf" class="col-md-4 col-form-label text-md-right">{{ __('Bookshelf') }}</label>

                      <div class="col-md-6">
                          <input id="bookshelf" type="text" class="form-control" name="bookshelf" required>


                      </div>
                  </div>
                    ...
                    <div class="form-group row">
                        <label for="author">Cover:</label>
                        <input type="file" class="form-control" name="bookcover"/>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Book') }}
                            </button>



                        </div>
                    </div>
                    ...
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div> 






@endsection
