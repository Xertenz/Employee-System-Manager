@extends('layout')
@section('title', 'Show All Departments')

@section('content')
<div class="card my-4">
    <div class="card-header">
        <span class="fw-bold fs-5">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </span>
        <span>
            <a href="{{ route('depart.create') }}" class="btn btn-primary btn-sm float-end">Add New</a>
        </span>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                @if ($allDeps)
                    @foreach ($allDeps as $dep)
                        <tr>
                            <td>{{ $dep->id }}</td>
                            <td>{{ $dep->title }}</td>
                            <td>
                                <a href="{{ url('depart/'.$dep->id.'/edit') }}">
                                    <button class="btn btn-success btn-sm">Update</button>
                                </a>
                                <a href="{{ url('depart/'.$dep->id.'/delete') }}">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection