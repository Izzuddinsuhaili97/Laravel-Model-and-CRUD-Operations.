@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Student Details</h3>
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
            <div class="form-group">
                <label for="first_name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->gender }}" readonly>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of birth</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->date_of_birth }}" readonly>
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->citizenship }}" readonly>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->marital_status }}" readonly>
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->religion }}" readonly>
            </div>
            <div class="form-group">
                <label for="active_status">Active Status</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->active_status }}" readonly>
            </div>
            <div class="form-group">
                <label for="year_of_study">Current year</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->year_of_study }}" readonly>
            </div>
            <div class="form-group">
                <label for="id_no">ID number</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->id_no }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $student->email }}" readonly>
            </div>
            </form>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection