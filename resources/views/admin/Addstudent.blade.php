@extends('layout')


@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>

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



                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}"  enctype="multipart/form-data">
                              
                              @csrf 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Student Name">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Student Roll">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" placeholder="Student Father Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" placeholder="student Mother Name">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="text" class="form-control p-input" name="student_email" placeholder="student email">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="student Address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Student Password">
                              </div>
        
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Department</label>
                                  <select class="form-control p-input" name="student_department"  id="">
                                  
                                      <option value="CSE"> CSE  </option>
                                      <option value="BBA"> BBA  </option>
                                      <option value="EEE"> EEE  </option>
                                      
                                      <option value="MBA"> MBA  </option>
                                      <option value="SE"> SE </option>
                                  
                                  </select>
                              </div>

                               
                                    

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admission_year" placeholder="Student Admission Year">
                              </div>

            
                             <div class="form-group">
                                  <label> Student Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="student_image"  id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div> 
                              </div>
                              <button type="submit" class="btn btn-success btn.block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

  




@endsection





