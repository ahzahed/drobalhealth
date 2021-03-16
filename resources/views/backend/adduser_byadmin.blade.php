@extends('backend.app')

@section('content')
<!-- Registration Part Start -->
<section id="registration">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto p-5" style="border: 2px solid black">
        <div class="regis-form">

                    <form method="POST" action="{{ route('adduser_byadmin.add') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="speciality">{{ __('Speciality') }}</label>

                       
                                <input id="speciality" type="speciality" placeholder="Cardiology (Chest pain, palpitations)" class="form-control @error('speciality') is-invalid @enderror" name="speciality" required>

                                @error('speciality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                        </div>
                        <div class="form-group">
                            <label for="qualification">{{ __('Qualification') }}</label>

                        
                                <input id="qualification" type="qualification" placeholder="MBBS, M.S,MCH(CVTS)" class="form-control @error('qualification') is-invalid @enderror" name="qualification" required>

                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>

                       
                                <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" required></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>

                        <div class="form-group">
                            <label for="avatar">{{ __('Image') }}</label>

                         
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" required>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                        </div>

                        <div class="form-group">
                            <label for="user_type">User Role</label>
                            <select class="form-control @error('user_type') is-invalid @enderror" name="user_type">
                                <option value="1">Admin</option>
                                <option value="2">Moderator</option>
                            </select>
                            @error('user_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="regis-btn text-center">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'description', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
@endsection
