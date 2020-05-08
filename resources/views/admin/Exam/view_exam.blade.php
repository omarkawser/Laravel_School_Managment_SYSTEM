@extends('layout')


@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">VIEW EXAM TABLE</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>ID #</th>
                          <th>Exam Name</th>
                          <th>Exam Type</th>
                          <th>Section</th>
                          <th>Exam Subject</th>
                          <th>Session</th>
                          <th>Exam Date</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                      
                     

                    <tbody>

                    @foreach($exam_view_info as $exam)
                      <tr>
                           <td>{{$exam->exam_id}}</td>
                          <td>{{$exam->exam_name}}</td>
                          <td>{{$exam->exam_type}}</td>
                          <td>{{$exam->exam_section}}</td>
                          <td>{{$exam->exam_subject}}</td>
                          <td>{{$exam->exam_session}}</td>
                          <td>{{$exam->exam_date}}</td> 
                         
                          <td>
                          <a href="{{URL::to('/delete_exam/'.$exam->exam_id )}}"  id="delete">  <button class="btn btn-outline-danger">Delete</button> </a>
                          </td>
                      </tr>  
                      @endforeach
                    </tbody>

                    
                  </table>
                </div>
              </div>
            </div>
          </div>
    >




@endsection