@extends('admin.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Permission Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.permission.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="guard_name">Guard name</label>
                        <select name="guard_name" id="guard_name" class="form-select">
                            <option value="">select...</option>
                            <option value="admin">Admin</option>
                            <option value="company">Company</option>
                        </select>
                        {{-- <input type="text" name="guard_name" class="form-control" id="guard_name"> --}}

                        @error('guard_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection