@extends('backend.app')

@section('content')

<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3">
                        @if ($registeredUser->avatar == NULL)
                            <img src="{{ asset('public/backend/images/avatar-default.png') }}" alt="img" height="130px" width="130px" class="rounded mb-2 img-thumbnail">
                        @else
                            <img src="{{ asset($registeredUser->avatar) }}" alt="img" height="80px" width="80px">
                        @endif
                        @if(Auth::user()->id === $registeredUser->id)
                        <a class="btn btn-outline-dark btn-sm btn-block" role="button" data-toggle="modal"
                                    data-target="#update_user">Edit Profile</a>
                        @endif
                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0 text-dark">{{ $registeredUser->name }}</h4>
                        <p class="small mb-0 text-dark">{{ $registeredUser->email }}</p>
                        <p class="small mb-0 text-dark">{{ $registeredUser->speciality }}</p>
                        <p class="small mb-0 text-dark">{{ $registeredUser->qualification }}</p>
                        <p class="small mb-0 text-dark">{{ $registeredUser->hospital }}</p>
                    </div>
                </div>
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
