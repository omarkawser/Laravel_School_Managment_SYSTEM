@extends('layout')


@section('content')

            <div class="col-lg-10 side-right">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h2 class="card-title">Set Exam Time Table Details</h2>


                    <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                   
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <form  form class="forms-sample" method="post" action="{{URL::to('/add_exam')}}">
                          @csrf
                          <div class="form-group">
                            <label for="name">Exam Name</label>
                            <input type="text" class="form-control"   name="exam_name" id="name" placeholder="Exam name">
                          </div>



                          <div class="form-group">

                          <label  for="name" > Select Term</label><br>
							<select  class="form-control p-input"   name="exam_type" id=" ">
						       <option value="">Select</option>
						       <option value="Mid-Term">Mid -Term</option>
						       <option value="Final-Term">Final-Term</option>
						       <option value="quiz">Quiz </option>
							</select>
                          </div>



                             <div class="form-group">

                          <label  for="name" > Session</label><br>
							<select  class="form-control p-input"   name="exam_session" id=" ">

                               <option value="">Select</option>
							<option value="fall">Fall</option>
							<option value="spring">spring</option>
                            <option value="Summer">Summer</option>

							</select>
                          </div>


                          <div class="form-group">
                            <label for="name">Subject Name</label>
                            <input type="text" class="form-control"   name="exam_subject" id="name" placeholder="subject name">
                          </div>


                          <div class="form-group">
                            <label for="name">Section Name</label>
                            <input type="text" class="form-control"   name="exam_section" id="name" placeholder="Class section">
                          </div>



                          <div class="form-group">
                                  <label for="exampleInputPassword1">Exam Date :</label>
                                  <input type="date" class="form-control p-input" name="exam_date" placeholder="Student Admission Year">
                              </div>
       
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <!-- <button class="btn btn-outline-danger">Cancel</button> -->
                          </div>
                        </form>
                  



@endsection




