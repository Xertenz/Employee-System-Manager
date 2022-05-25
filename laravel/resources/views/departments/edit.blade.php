@extends('layout')
@section('title', 'Create')

@section('content')
<div class="card my-4">
    <div class="card-header">
        <span class="fw-bold fs-5">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </span>
        <span>
            <a href="{{ route('depart.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
        </span>
    </div>
    <div class="card-body">
        <form action="{{ url('depart/'.$item->id) }}" method="POST">
            @csrf
            @method('put')
            @if ( Session::has('msg') )
                <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <table id="datatablesSimple" class="table-bordered table-striped">
                <thead></thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="fw-bold">Title</span>
                        </td>
                        <td>
                            <input type="text" name="title" value="{{ $item->title }}" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"  class="p-2">
                            <input type="submit" class="btn btn-primary px-4" value="Update">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection