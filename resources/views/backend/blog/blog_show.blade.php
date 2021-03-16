@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class="form-group">
                  <label>Image</label>
                    <img src="{{asset($blog->image)}}" style="height: 100px; width: 100px" alt="">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $blog->title }}" name="title" placeholder="Add Title" readonly>
                  </div>

                  <div class="form-group">
                    <label>Description:</label>
                    <p>{!! $blog->description !!}</p>
                  </div>
              </form>
        </div>
    </div>
</div>
@endsection

