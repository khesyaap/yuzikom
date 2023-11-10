@extends('main.index')

@section('title', 'Master Location')

@section('contents')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Master Location</h6>
    </div>
    <div class="card-body">
        <a href={{ route('location.tambahL') }} class="btn btn-primary mb-3">Add Master</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($id = 1)
                    @foreach ($dataL as $row)
                    <tr>
                        <th>{{ $id++ }}</th>
                        <td>{{ $row->lokasi }}</td>
                        <td>{{ $row->status }}</td>
                        <td>
                            <a href={{ route('location.editL', $row -> id) }} class="btn btn-warning">Edit</a>
                            <a href={{ route('location.hapusL', $row -> id) }} class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection