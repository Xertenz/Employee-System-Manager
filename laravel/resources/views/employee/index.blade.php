@extends('layout')
@section('title', 'Show All Employees')

@section('content')
<div class="card my-4">
    <div class="card-header">
        <span class="fw-bold fs-5">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </span>
        <span>
            <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm float-end">Add New</a>
        </span>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                @if ($allEmployee)
                    @foreach ($allEmployee as $emp)
                        <tr>
                            <td>{{ $emp->id }}</td>
                            <td>{{ $emp->fullname }}</td>
                            <td>{{ $emp->email }}</td>
                            <td>{{ $emp->phone }}</td>
                            <td>{{ $emp->department->title }}</td>
                            <td>
                                <a href="{{ url('employee/'.$emp->id.'/edit') }}">
                                    <button class="btn btn-success btn-sm">Update</button>
                                </a>
                                <a href="{{ url('employee/'.$emp->id.'/delete') }}">
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