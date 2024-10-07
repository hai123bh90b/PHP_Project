@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <h1 class="text-center">Records</h1>
    </div>
    <div class="content">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>
                            @if($member->groupData)
                            {{$member->groupData->name}}
                            @else
                            No Group
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <a href="{{ url('student') }}" class="btn btn-danger">Back to Students</a>
        </div>
    </div>
</div>
@endsection
