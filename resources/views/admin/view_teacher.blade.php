@extends('layout')




@section('content')




          <div class="row user-profile">
            <div class="col-lg-16 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Teacher Info</h2>

                     <!-- pdf create  -->
                  <div  class="col-lg-50 side-right"   >   <button class="btn btn-success"> pdf  </button> 
         
                  
                     </div>

                 <!-- <a href="">  <img src="http://via.placeholder.com/47x47" alt=""> </a> -->
                  <img src="{{URL::to($teacher_info_view->teacher_image)}}" alt="">
                  <p class="name"> {{$teacher_info_view->teacher_name}}</p>
                  <p class="designation">{{$teacher_info_view->teacher_department}}</p>


             
                  <!-- <a class="number" href="#">+1 9438 934089</a> -->
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <!-- <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul> -->
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p> total information of this teacher are  given below.</p>
                  </div>
                <div class="info-links">


                    <a class="website">
                      <i class="icon-globe icon"> Teacher Phone: </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$teacher_info_view->teacher_phone}} </span>
                    </a> 



                    <a class="website">
                      <i class="icon-globe icon">Teacher address : </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$teacher_info_view->teacher_address}} </span>
                    </a> 

                   
                  </div>

                </div>
              </div>
            </div> 
        
        </div>









@endsection




