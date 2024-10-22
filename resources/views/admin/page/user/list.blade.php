@extends('admin.partial.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User List</h4>
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">user Create</a>
                    <a href="{{ route('admin.role.create') }}" class="btn btn-info">Role Create</a>
                    <a href="{{ route('admin.permission.create') }}" class="btn btn-success">Permission Create</a>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table">
                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $data)

                                @php
                                    $permissions = $data->getDirectPermissions()->pluck('name');
                                @endphp
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        @if(!empty($permissions))
                                        @foreach ($permissions as $permission)
                                        <span class="badge text-bg-success">{{ $permission }}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user.assign_permission',$data->id) }}" class="btn btn-primary"> Add/Edit permission</a>
                                        <a href="{{route('admin.user.edit',$data->id)}}" class="btn btn-primary"> Edit</a>
                                        <a href="{{ route('admin.user.delete',$data->id) }}" class="btn btn-danger"> Delete</a>
                                    </td>
                                </tr>
                                @endforeach                        
                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
@endsection