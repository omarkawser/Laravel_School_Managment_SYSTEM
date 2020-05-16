@extends('layout')




@section('content')


<!-- <div class="content-wrapper">
          <h1 class="page-title">Data table</h1> -->
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Teacher table</h2>

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
                         
                          <th>Teacher Name</th>
                          <th>Teacher Phone</th>
                          <th>Teacher address</th>
                          
                          <th>Teacher Department</th>
                          <th>Teacher Address </th>
                          <th>Teacher Image</th>
                        
                        <th>Actions</th>
                      </tr>

                      <tbody>
                   @foreach($all_teacher_info as $view_teacher)
                      <tr>
                          <td>{{$view_teacher->teacher_name}}</td>
                          <td>{{$view_teacher->teacher_phone}}</td>
                          <td>{{$view_teacher->teacher_address}}</td>
                          <td>{{$view_teacher->teacher_department}} </td>
                          <td>{{$view_teacher->teacher_address}}</td>
                          <<td> <img src="{{URL::to($view_teacher->teacher_image)}}"  height="80" width="100" style="border-radius: 50%;" > </td>
                          
                          
                          
                          <td>
                          <a href="{{URL::to('/viewteacher/'.$view_teacher->teacher_id)}}">  <button class="btn btn-outline-primary">View</button></a>
                         <a href="{{URL::to('/edit_teacher/'.$view_teacher->teacher_id)}}">  <button class="btn btn-outline-warning">Update</button> </a> 
                          <a href="{{URL::to ('/teacher_delete/'.$view_teacher->teacher_id)}}"  id="delete">  <button class="btn btn-outline-danger">Delete</button> </a>
                          </td> 
                      </tr>
                      @endforeach 
                
                    </tbody>
                    </thead>
               
                  </table>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->


@endsection


