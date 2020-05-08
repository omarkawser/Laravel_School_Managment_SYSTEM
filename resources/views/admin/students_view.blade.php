@extends('layout')




@section('content')




          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Student Info</h2>

                     <!-- pdf create  -->
                  <div  class="col-lg-50 side-right"   >   <button class="btn btn-success"> pdf  </button> 
         
                  
                     </div>

                 <!-- <a href="">  <img src="http://via.placeholder.com/47x47" alt=""> </a> -->
                  <img src="{{URL::to($stu_info_view->student_image)}}" alt="">
                  <p class="name"> {{$stu_info_view->student_name}}</p>
                  <p class="designation">{{$stu_info_view->student_department}}</p>
                  <a class="email" href="#">{{$stu_info_view->student_email}}</a>
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
                    <p> total information of this student are  given below.</p>
                  </div>
                <div class="info-links">


                    <a class="website">
                      <i class="icon-globe icon"> Father Name: </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$stu_info_view->student_fathername}} </span>
                    </a> 



                    <a class="website">
                      <i class="icon-globe icon"> Mother Name: </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$stu_info_view->student_mothername}} </span>
                    </a> 

                    <a class="website">
                      <i class="icon-globe icon"> Student Addres: </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$stu_info_view->student_address}} </span>
                    </a> 
                     
                    <a class="website">
                      <i class="icon-globe icon"> Student Admission Year: </i>
                      <span  style="font-family:  vernada; font-size: 15px;">{{$stu_info_view->student_admission_year}} </span>
                    </a> 

                   
                  </div>

                </div>
              </div>
            </div> 
        
        </div>









@endsection




