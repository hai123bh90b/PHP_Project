@extends('backend.app')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Student</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- <div class="row justify-content-around"> -->
          <div class="col-md-0">
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Update Student Information</h3>
                  </div>

                  <form action="{{ route('student.update' , $student->id) }}" method="POST" enctype="multipart/form-data"> 
                      @csrf 
                      @method('PUT')

                      <div class="card-body">

                        <div class="form-group">
                          @if ($student->image)
                          <div class="mt-2">
                              <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" width="100">
                          </div>
                          @endif
                          <label for="image">Update Profile</label>
                          <input type="file" name="image" class="form-control-file" id="image">
                            </div>

                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ $student->name }}" id="name" placeholder="Enter student name" required>
                          </div>

                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control" value="{{ $student->email }}" id="email" placeholder="Enter student email" required>
                          </div>

                          <div class="form-group">
                              <label for="regno">Registration No</label>
                              <input type="text" name="regno" class="form-control" value="{{ $student->regno }}" id="regno" placeholder="Enter registration number" required>
                          </div>

                          <div class="form-group">
                              <label for="course">Course</label>
                              <input type="text" name="course" class="form-control" value="{{ $student->course }}" id="course" placeholder="Enter course name" required>
                          </div>
                      </div>

                      <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{ url('student') }}" class="btn btn-danger">Back</a>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>


@endsection
