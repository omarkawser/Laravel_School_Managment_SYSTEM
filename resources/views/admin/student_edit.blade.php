@extends('layout')


@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"> Update Student :</h2>

                          <pclass="alert-danger">  
                          
                           <?php 
                            
                            $exception=Session::get('exception');

                            if($exception){

                                echo  $exception;
                                Session::put('exception', null);
                            }
                          
                          ?>
                          
                          
                          </p>

                      <form class="forms-sample" method="post" action="{{URL::to('/update_student',$stu_info_view->student_id)}}" >
                              
                              @csrf 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" 
                                  value="{{$stu_info_view->student_name}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll"
                                   value="{{$stu_info_view->student_roll}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" 
                                  value="{{$stu_info_view->student_fathername}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" 
                                  value="{{$stu_info_view->student_mothername}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="text" class="form-control p-input" name="student_email"
                                   value="{{$stu_info_view->student_fathername}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" 
                                  value="{{$stu_info_view->student_email}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
                                  <input type="password" class="form-control p-input" name="student_password" 
                                  value="{{$stu_info_view->student_password}}">
                              </div>  
                              <!-- <div class="form-group">
                                  <label for="exampleInputPassword1">Student Department</label>
                                  <select class="form-control p-input" name="student_department"  id=""
                                  value="{{$stu_info_view->student_department}}"
                                  >
                                  
                                      <option value="CSE"> CSE  </option>
                                      <option value="BBA"> BBA  </option>
                                      <option value="EEE"> EEE  </option>
                                      
                                      <option value="MBA"> MBA  </option>
                                      <option value="SE"> SE </option>
                                  
                                  </select>
                              </div> -->

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admission_year"
                                   value="{{$stu_info_view->student_admission_year}}">
                              </div>

            
                                  </div> 
                              </div>
                              <button type="submit" class="btn btn-success btn.block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

  




@endsection





