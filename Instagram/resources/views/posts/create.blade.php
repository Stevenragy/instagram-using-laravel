@extends('layouts.app')

@section('content')
    <div class="container p-4" style="width:800px; margin: auto;">
        <form action="{{route('p.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Add Post</h2>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                        <input id="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="caption"
                               value="{{ old('caption') }}"
                               autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
                        <input type="file" class="form-control-file" name="image" id="image">

                        @error('image')
{{--                        <span class="invalid-feedback" role="alert">--}}
                            <span style="color:#e3342f">{{ $message }}</span>
{{--                        </span>--}}
                        @enderror
                    </div>
                    <div class="row pt-3">
                        <button class="btn btn-primary">Add Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
