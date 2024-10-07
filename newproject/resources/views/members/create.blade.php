@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Member</h1>
    </section>
    <section class="content">
        <form method="POST" action="{{ route('members.store') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Member</button>
                <a href="{{ url('relation') }}" class="btn btn-danger">Back</a>
            </div>
    
        </form>
    </section>
</div>
@endsection
