@extends('backend.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-md-6">
                    <h1>Student Records</h1>
                </div>
                <div class="col-12 col-md-6">
                    <ol class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Student Records</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comprehensive Student Records</h3>
                            <div class="d-flex justify-content-end flex-wrap">
                                <a href="{{ url('student/create') }}" class="btn btn-primary mr-2 mb-2">Add Student</a>
                                
                            </div>

                            
                        </div>

                        <div class="card-body">
                            <form method="GET" action="{{ url('student') }}" class="d-flex justify-content-between mb-3">
                                <input type="text" name="search" class="form-control mr-2" placeholder="Search Here" value="{{ request()->input('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <a href="{{ url('student') }}" class="btn btn-secondary">Reset</a>
                            </form>

                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Profile Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registration No</th>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>
                                                @if($student->image)
                                                    <img src="{{ asset('storage/' . $student->image) }}" alt="Profile Image" width="70" height="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->regno }}</td>
                                            <td>{{ $student->course }}</td>



                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm mb-1"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-info btn-sm mb-1"><i class="fas fa-eye"></i></a>
                                                <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
            
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
