@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Student Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Gender</label>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label><br>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label><br>
              <input type="radio" id="other" name="gender" value="other">
               <label for="other">Other</label>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of birth</label>
              <input type="text" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship"/>
          </div>
          <div class="form-group">
              <label for="marital_status">Marital Status</label>
              <input type="radio" id="marriage" name="marital_status" value="marriage">
              <label for="marriage">Marriage</label><br>
              <input type="radio" id="Single" name="marital_status" value="Single">
              <label for="Single">Single</label><br>
              <input type="radio" id="other" name="marital_status" value="other">
               <label for="other">Other</label>
          </div>
          </div>
          <div class="form-group">
              <label for="religion">Religion</label>
              <input type="text" class="form-control" name="religion"/>
          </div>
          <div class="form-group">
              <label for="active_status">Active Status</label>
              <input type="radio" id="yes" name="active_status" value="yes">
              <label for="yes">YES</label><br>
              <input type="radio" id="no" name="active_status" value="no">
              <label for="no">NO</label>
          </div>
          <div class="form-group">
              <label for="year_of_study">Current year</label>
              <input type="text" class="form-control" name="year_of_study"/>
          </div>
          <div class="form-group">
              <label for="id_no">ID number</label>
              <input type="text" class="form-control" name="id_no"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="row justify-content-center">
          <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                        
          <button type="submit" class="btn btn-primary text-center">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection