@extends('admin.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.edit',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group row">
                        @foreach ($roles as $data )
                            <label for="role{{ $data->id }}" class="col-xl-2 col-md-2 col-sm-2" >
                                <input type="checkbox" class="me-1" id="role{{ $data->id }}" name="role[]" value="{{ $data->name }}" 
                                    {{ in_array($data->name, $user->roles->pluck('name')->toArray()) ? 'checked' : '' }}>
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