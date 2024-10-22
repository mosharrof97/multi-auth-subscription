@extends('admin.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group row">
                        @foreach ($roles as $data )
                            <label for="role{{ $data->id }}" class="col-xl-2 col-md-2 col-sm-2" multiple>
                                <input type="checkbox" class="me-1" id="role{{ $data->id }}"  name="role[]" value="{{ $data->name }}">
                                {{ $data->name }}
                            </label>
                        @endforeach
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