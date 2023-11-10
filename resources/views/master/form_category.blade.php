@extends('main.index')

@section('title', 'Master Category')

@section('contents')
<form action={{ isset($category) ? route('category.tambah.update', $category->id) : route('category.tambah.simpan') }} method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{ isset($category) ? 'Edit Master Category' : 'Add Master Category' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name_item">Name Item</label>
                    <input type="text" class="form-control" id="name_item" name="name_item" value="{{ isset($category) ? $category->name_item : '' }}">
                    @error('name_item')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection