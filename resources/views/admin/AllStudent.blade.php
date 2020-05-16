@extends('layout')




@section('content')



<!-- <div class="content-wrapper">
          <h1 class="page-title">Data table</h1> -->
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>

              <?php 
                            
                            $exception=Session::get('exception');

                            if($exception){

                                echo  $exception;
                                Session::put('exception', null);
                            }
                          
                          ?>
                          
                          </p>

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student  Name</th>
                          <th>Student Email</th>
                          <th>Student Image</th>
                          <th>Student Address </th>
                          <th>Student Department</th>
                        
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_student_info as $view_student)
                      <tr>
                          <td>{{$view_student->student_roll}}</td>
                          <td>{{$view_student->student_name}}</td>
                          <td>{{$view_student->student_email}}</td>
                          <<td> <img src="{{URL::to($view_student->student_image)}}"  height="80" width="100" style="border-radius: 50%;" > </td>
                          <td>{{$view_student->student_address}}</td>
                          <td>{{$view_student->student_department}} </td>
                          
                          
                          <td>
                          <a href="{{URL::to('/viewstudent/'.$view_student->student_id )}}">  <button class="btn btn-outline-primary">View</button></a>
                         <a href="{{URL::to('/edit_student/'.$view_student->student_id )}}">  <button class="btn btn-outline-warning">Update</button> </a> 
                          <a href="{{URL::to ('/student_delete/'.$view_student->student_id)}}"  id="delete">  <button class="btn btn-outline-danger">Delete</button> </a>
                          </td>
                      </tr>
                      @endforeach
                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->


@endsection


