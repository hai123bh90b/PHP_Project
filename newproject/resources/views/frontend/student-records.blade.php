@extends('frontend.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-md-6">
                    <h1>Student Records</h1>
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
                                
                            </div>
                              
                        </div>

                        <div class="card-body">

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
              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>
                                                @if($student->image)
                                                    <img src="{{ asset('storage/' . $student->image) }}" alt="Profile Image" width="50" height="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->regno }}</td>
                                            <td>{{ $student->course }}</td>
                                
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
