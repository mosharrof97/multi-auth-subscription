@extends('admin.partial.layout')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
      <div class="card-title">Plan List</div>
      <a href="{{ route('admin.plan.create') }}" class="btn btn-primary">Create New Plan</a>
    </div>
    <div class="card-body">
      @if (session('message'))
        <div class="alert alert-success">
            <span class="text-success">{{ session('message') }}</span>
        </div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Duration in days</th>
              <th>Price</th>                 
              <th>Action</th>              
            </tr>
          </thead>
          <tbody>
            @foreach($plans as $key => $data)
            <tr>
              <th scope="row">{{ $key + 1 }}</th>
              <td>{{$data->name }}</td>
              <td>{{$data->duration_in_days }} days</td>
              <td>{{$data->price }}</td>
              <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-info">View</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div class="">
        {{-- {{ $plans->links() }} --}}
      </div>
    </div>
  </div>
@endsection