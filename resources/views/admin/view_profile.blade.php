@extends('layout')




@section('content')




          <div class="row user-profile">
            <div class="col-lg-16 side-left">
              <div class="card mb-12">
                <div class="card-body avatar">
                  <h2 class="card-title">Admin  Info</h2>

                     <!-- pdf create  -->
                  <div  class="col-lg-50 side-right"   >
         
                  
                     </div>

                 <!-- <a href="">  <img src="http://via.placeholder.com/47x47" alt=""> </a> -->
                  
                  <p class="name"> {{$admin_profile->name}}</p>
                  <p class="designation">{{$admin_profile->email}}</p>


             
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
                   
                  </div>
                <div class="info-links">


                    
                <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>

                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons"></i>
                                        
                                    </div>
                                    <div class="content">
                                        B.S. in Computer Science from the University of AIUB
                                    </div>
                                </li>




                                <li>
                                    <div class="title">
                                        <i class="material-icons"></i>
                                     
                                    </div>
                                    <div class="content">
                                     
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons"></i>
                                        Skills
                                    </div>
                                    <div class="content">
                                        <span class="label bg-red">Laravel </span>
                                        <span class="label bg-teal">JavaScript</span>
                                        <span class="label bg-blue">PHP</span>
                                        <span class="label bg-amber">Node.js</span>
                                    </div>
                                </li>
                                <li>
                                    
                                    <div class="content">
                                       
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                    

                   
                  </div>

                </div>
              </div>
            </div> 
        
        </div>









@endsection




