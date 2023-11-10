@extends('main.index')

@section('title', 'Master Category')

@section('contents')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Master Category</h6>
    </div>
    <div class="card-body">
        <a href={{ route('category.tambah') }} class="btn btn-primary mb-3">Add Master</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Item</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($id = 1)
                    @foreach ($data as $row)
                    <tr>
                        <th>{{ $id++ }}</th>
                        <td>{{ $row->name_item }}</td>
                        <td>
                            <a href={{ route('category.edit', $row -> id) }} class="btn btn-warning">Edit</a>
                            <a href={{ route('category.hapus', $row -> id) }} class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection