@extends('backend.app')
<style>
    .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url({{ asset('public/backend/images/dark.jpg') }});
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh
}
</style>
@section('content')

<div class="row py-5 px-4">
    <div class="col-md-12 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3">
                        @if ($registeredUser->avatar == NULL)
                            <img src="{{ asset('public/backend/images/avatar-default.png') }}" alt="img" height="200px" width="200px" class="rounded mb-2 img-thumbnail">
                        @else
                            <img src="{{ asset($registeredUser->avatar) }}" alt="img" height="200px" width="200px" class="mb-2 border rounded">
                        @endif
                        @if(Auth::user()->id === $registeredUser->id || Auth::user()->user_type == "1")
                        <a class="btn btn-outline-dark btn-sm btn-block" role="button" data-toggle="modal"
                                    data-target="#update_user">Edit Profile</a>
                        @endif
                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"> {{ $registeredUser->name }}</h4>
                        <p class="medium mb-0"> {{ $registeredUser->email }}</p>
                        <p class="medium mb-0"> {{ $registeredUser->speciality }}</p>
                        <p class="medium mb-0"> {{ $registeredUser->qualification }}</p>
                        <p class="medium mb-3"> {{ $registeredUser->hospital }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$blogs}}</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Blogs Posted</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    {!! $registeredUser->description !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Head Information Modal Start -->
<div class="pro-edit-modal">
    <div class="modal fade" id="update_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Basics & Lifestyle</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('update_user/'.$registeredUser->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $registeredUser->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{ $registeredUser->email }}" readonly>
                                <input type="hidden" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $registeredUser->email }}" readonly>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Speciality</label>
                                <input type="text" class="form-control @error('speciality') is-invalid @enderror" name="speciality"
                                    value="{{ $registeredUser->speciality }}">
                                @error('speciality')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Qualification</label>
                                <input type="text" class="form-control @error('qualification') is-invalid @enderror" name="qualification"
                                    value="{{ $registeredUser->qualification }}">
                                @error('qualification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label>Hospital Name</label>
                                <input type="text" class="form-control @error('hospital') is-invalid @enderror" name="hospital"
                                    value="{{ $registeredUser->hospital }}">
                                @error('hospital')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                
                                    <textarea class="form-control @error('speciality') is-invalid @enderror" id="summary-ckeditor" name="description">{{ $registeredUser->description }}</textarea>
                                @error('speciality')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
               
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="avatar" class="col-md-4 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                        value="{{ $registeredUser->avatar }}" name="avatar">
                                    <p>Present Photo</p>

                                    @if ($registeredUser->avatar == NULL)
                                    <img src="{{ asset('public/backend/images/avatar-default.png') }}" alt="img" height="80px" width="80px">
                                    @else
                                    <img src="{{ asset($registeredUser->avatar) }}" alt="img" height="80px" width="80px">
                                    @endif

                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="pro-edit-modal-btn text-center w-100">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Head Information Modal End -->

<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
@endsection
