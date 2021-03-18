@extends('backend.app')

@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All User Role</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(Auth::user()->user_type == "1")
                            <a class="btn btn-info" href="{{url('/adduser_byadmin')}}" role="button">Add User</a>
                        @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Speciality</th>
                      <th>Qualification</th>
                      <th>Hospital Name</th>
                      <th colspan="2">Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($registeredUser as $registeredUser)
                      @if($registeredUser->user_type=="1" || $registeredUser->user_type=="2")
                        <tr>
                            <td>{{$registeredUser->id}}</td>
                            <td><img src="{{asset($registeredUser->avatar)}}" style="height: 50px; width: 50px" alt=""></td>
                            <td>{{$registeredUser->name}}</td>
                            <td>{{$registeredUser->email}}</td>
                            <td>{{$registeredUser->speciality}}</td>
                            <td>{{$registeredUser->qualification}}</td>
                            <td>{{$registeredUser->hospital}}</td>
                            <td><a href="{{ url('user_profile/'.$registeredUser->id) }}" class="btn btn-primary">Details</a></td>
                            <td><a href="{{ url('userroleDelete/'.$registeredUser->id) }}" class="btn btn-danger">Delete</a></td>
                            @if ($registeredUser->user_type == '1')
                                <td>Admin</td>
                            @else
                                <td>Moderate</td>
                            @endif
                        </tr>
                        @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
