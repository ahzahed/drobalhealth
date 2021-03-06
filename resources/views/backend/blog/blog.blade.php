@extends('backend.app')

@section('content')
@if (Auth::user()->status == "0" || Auth::user()->pending == "0")
    <div class="container">
      <h1>Your profile is not approved yet!</h1>
    <h2>We will review your profile and approve you soon</h2>
    <h3>Then You will be able to post blog</h3>
    <h4>Please, complete your profile. Otherwise you will not be approved</h4>
    <h5>Thank you</h5>
    </div>
@else
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Blog Table</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total Blog
                @forelse($blog as $blogs)
                <span class="badge badge-secondary">
                {{ $loop->count }}
                @break
            </span>
            @empty
            <span class="badge badge-danger">
                Empty
            </span>
                 @endforelse
            </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <a href="{{ url('/addBlog') }}" class="btn btn-info mb-2">Add Blog</a>
                <a href="{{ url('/trash_blog') }}" class="btn btn-info mb-2">Trash/Restore</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th colspan="3">Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($blog as $blog)
                    <tr>
                      <td>{{$blog->id}}</td>
                      <td><img
                        src="{{ $blog->image }}" style="height:40px; width:40px !important;"
                        alt="image"
                        class="img-fluid w-100"
                      /></td>
                      <td>{{$blog->title}}</td>
                      <td>{!! Str::limit($blog->description, 180, $end='...') !!}</td>
                      <td><a href="{{ URL::to('blog/'.$blog->id) }}" class="btn btn-secondary">View</a></td>
                      <td><a href="{{ URL::to('blog/'.$blog->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
                      {{-- <td><form action="{{ URL::to('blog/'.$blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" id="delete">Delete</button>
                    </form></td> --}}
                        <td><a href="{{ url('blogDelete/'.$blog->id) }}" id="delete" class="btn btn-danger">Delete</a></td>
                      <td>@if($blog->status==0)
                        <a href="{{ url('blogActive/'.$blog->id) }}" class="btn btn-info">Active</a>
                        @else <a href="{{ url('blogDeactive/'.$blog->id) }}" class="btn btn-danger">Deactive</a> @endif
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endif
@endsection
