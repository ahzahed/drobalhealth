@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ url('blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $blog->id }}">
                <div class="form-group">
                  <label>Icon</label>
                  {{-- <img src="{{ $blog->img }}" alt=""> --}}
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $blog->title }}" name="title" placeholder="Add Title">
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" id="summary-ckeditor" name="description">{{ $blog->description }}</textarea>
                    {{-- <input type="text" class="form-control" value="{{ $blog->description }}" name="description" placeholder="Add description"> --}}
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
@endsection

