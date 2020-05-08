@extends('layout')


@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher </h2>

                          <pclass="alert-danger">  
                          
                           <?php 
                            
                            $exception=Session::get('exception');

                            if($exception){

                                echo  $exception;
                                Session::put('exception', null);
                            }
                          
                          ?>
                          
                          </p>
                          
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






                          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}"  enctype="multipart/form-data">
                              
                              @csrf 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher  Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Teacher  Name">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Teacher Phone">
                              </div>



                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher  Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Teacher  Address">
                              </div>

        
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department</label>
                                  <select class="form-control p-input" name="teacher_department"  id="">
                                  
                                      <option value="CSE"> CSE  </option>
                                      <option value="BBA"> BBA  </option>
                                      <option value="EEE"> EEE  </option>
                                      <option value="MBA"> MBA  </option>
                                      <option value="SE"> SE </option>
                                  
                                  </select>
                              </div>

                             <div class="form-group">
                                  <label> Teacher Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="teacher_image"  id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div> 
                              </div>
                              <button type="submit" class="btn btn-success btn.block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

  




@endsection





