@extends('frontend.partial.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">New Plan</div>
                <a href="{{ route('admin.plan') }}" class="btn btn-primary">Plan List</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.plan.create') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="name">Plan Name:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="plan Name" />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="duration_in_days">Duration in days:<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="duration_in_days" name="duration_in_days"
                                    placeholder="Enter number of employee" />
                                @error('duration_in_days')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                                
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="price">Price:<span class="text-danger">*</span></label>
                                <input type="decimel" class="form-control" id="price" name="price"
                                    placeholder="Enter price" />
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                                
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="Submit" class="btn btn-success" value="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection