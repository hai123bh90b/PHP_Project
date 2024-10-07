@extends('backend.app')

@section('content') 
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Employee Import/Export</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col">
                    <a href="{{ route('employees.export') }}" class="btn btn-primary">Export CSV</a>
                    <a href="{{ route('employees.list') }}" class="btn btn-secondary">View Records</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="{{ route('employees.import') }}" method="POST" enctype="multipart/form-data" class="mb-2">
                        @csrf
                        <div class="input-group">
                            <input type="file" name="file" class="form-control" required>
                            <button type="submit" class="btn btn-success">Import CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
