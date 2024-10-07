@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Relations</h1>
    </section>
    <section class="content">
        <div class="d-flex justify-content-center">
            <a href="{{ route('members.create') }}" class="btn btn-primary mr-2">Add Member</a>
            <a href="{{ route('groups.create') }}" class="btn btn-secondary mr-2">Add Group</a>
            <a href="{{ route('members.index') }}" class="btn btn-success mr-2">View Records</a>

        </div>
    </section>
</div>
@endsection
