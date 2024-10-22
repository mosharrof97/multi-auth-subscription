@extends('admin.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Role: {{ $role->name }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.role.role_permission',$role->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="form-group row">
                        @foreach ($permission as $data )
                            <label for="permission{{ $data->id }}" class="col-xl-2 col-md-2 col-sm-2">
                                <input type="checkbox" class="me-1" id="permission{{ $data->id }}"  name="permission[]" value="{{ $data->name }}" 
                                {{ in_array($data->id,$rolePermissions) ? 'checked':''  }}> {{ $data->name }}
                            </label>
                        @endforeach

                        @error('permission')
                            <span>{{ $message }}</span>
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