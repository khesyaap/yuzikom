@extends('main.index')

@section('title', 'Master Location')

@section('contents')
<form action={{ isset($location) ? route('location.tambahL.updateL', $location->id) : route('location.tambahL.simpanL') }} method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{ isset($location) ? 'Edit Master Location' : 'Add Master Location' }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="lokasi">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ isset($location) ? $location->lokasi : '' }}">
                    @error('lokasi')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ isset($location) ? $location->status : '' }}">
                    @error('status')
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