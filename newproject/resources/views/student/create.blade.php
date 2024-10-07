@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Student</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- <div class="row justify-content-center"> -->
                <div class="col-md-0">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Student</h3>
                        </div>

                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter student name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter student email" required>
                                </div>

                                <div class="form-group">
                                    <label for="regno">Registration No</label>
                                    <input type="text" name="regno" class="form-control" id="regno" placeholder="Enter registration number" required>
                                </div>

                                <div class="form-group">
                                    <label for="course">Course</label>
                                    <input type="text" name="course" class="form-control" id="course" placeholder="Enter course name" required>
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" class="form-control-file" id="image" required>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ url('student') }}" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
