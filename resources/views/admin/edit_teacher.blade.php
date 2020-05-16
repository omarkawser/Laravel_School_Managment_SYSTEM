

@extends('layout')


@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"> UPDATE TEACHER  </h2>

                          <pclass="alert-danger">  
                          
                           <?php 
                            
                            $exception=Session::get('exception');

                            if($exception){

                                echo  $exception;
                                Session::put('exception', null);
                            }
                          
                          ?>
                          
                          </p>

                      <form class="forms-sample" method="post" action="{{URL::to('/update_teacher',$up_teacher->teacher_id)}}" >
                              
                              @csrf 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name :</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" 
                                  value="{{$up_teacher->teacher_name}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher  Phone</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone"
                                   value="{{$up_teacher->teacher_phone}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address </label>
                                  <input type="text" class="form-control p-input" name="teacher_address" 
                                  value="{{$up_teacher->teacher_address}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department</label>
                                  <select class="form-control p-input" name="teacher_department"  id=""
                                  value="{{$up_teacher->teacher_department}}"
                                  >
                                  
                                      <option value="CSE"> CSE  </option>
                                      <option value="BBA"> BBA  </option>
                                      <option value="EEE"> EEE  </option>
                                      
                                      <option value="MBA"> MBA  </option>
                                      <option value="SE"> SE </option>
                                  
                                  </select>
                              </div> -->
                              <!-- <div class="form-group">
                                  <label for="exampleInputPassword1">TEACHER Department</label>
                                  <select class="form-control p-input" name="teacher_department"  id=""
                                  value="{{$up_teacher->teacher_department}}"
                                  >
                                  
                                      <option value="CSE"> CSE  </option>
                                      <option value="BBA"> BBA  </option>
                                      <option value="EEE"> EEE  </option>
                                      
                                      <option value="MBA"> MBA  </option>
                                      <option value="SE"> SE </option>
                                  
                                  </select>
                              </div> -->

                            

            
                                  </div> 
                              </div>
                              <button type="submit" class="btn btn-success btn.block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

  




@endsection





