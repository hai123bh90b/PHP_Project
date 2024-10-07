@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Student Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Show Student Detail</li>
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
                            <h3 class="card-title">Student Information</h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">Profile</label><br>
                                @if ($student->image)
                                    <img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->name }}" class="img-thumbnail" width="150">
                                @else
                                    <p>No image</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <p>{{ $student->name }}</p>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <p>{{ $student->email }}</p>
                            </div>

                            <div class="form-group">
                                <label for="regno">Registration No</label>
                                <p>{{ $student->regno }}</p>
                            </div>

                            <div class="form-group">
                                <label for="course">Course</label>
                                <p>{{ $student->course }}</p>
                            </div>

                        </div>

                        <div class="card-footer">
                            <a href="{{ url('student') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
