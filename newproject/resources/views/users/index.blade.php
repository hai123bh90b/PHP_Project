@extends('backend.app')

@section('content')

<style>
.switch {
    position: relative;
    display: inline-block;
    width: 60px; 
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}


.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc; 
    transition: .4s;
    border-radius: 34px; 
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px; 
    width: 26px; 
    left: 4px; 
    bottom: 4px; 
    background-color: white; 
    transition: .4s;
    border-radius: 50%; 
}

input:checked + .slider {
    background-color: #2196F3; 
}

input:checked + .slider:before {
    transform: translateX(26px); 
}
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-md-6">
                    <h1>User Records</h1>
                </div>
                <div class="col-12 col-md-6">
                    <ol class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                            <h3 class="card-title">Users</h3>
                        </div>

                        <div class="card-body">
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <table id="example2" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->city }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td>
                                        
                                            <label class = "switch">
                                            <input type="checkbox" class="role-toggle" data-id="{{ $user->id }}" {{ $user->type === 'admin' ? 'checked' : '' }}>
                                            <span class="slider"></span>
                                        </label>


                                            {{-- <form action="{{ route('users.update', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change this users role?');">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="type" value="{{ $user->type === 'admin' ? 'user' : 'admin' }}">
                                                <button type="submit" class="btn btn-sm {{ $user->type == 'admin' ? 'btn-danger' : 'btn-success' }}">
                                                    {{ $user->type == 'admin' ? 'Revoke Admin' : 'Make Admin' }}
                                                </button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.role-toggle').change(function() {
            var userId = $(this).data('id');
            var newRole = $(this).is(':checked') ? 'admin' : 'user';


            $.ajax({
                url: '/users/' + userId, 
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}', 
                    type: newRole 
                },
                success: function(response) {
                    alert('User role updated successfully to ' + newRole);
                },
                error: function(xhr) {

                    alert('Error updating user role. Please try again.');
                }
            });
        });
    });
</script>
@endsection
