@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="Post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-row">
                    <h1>Add New Row</h1>
                </div>
                <div class="form-row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
    
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
    
                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-row">
                    <label for="image" class="col-md-4 col-form-label">Post Images</label>
    
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">  
    
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-row pt-3">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
            </div>   
            
        </div>
    </form>
</div>
@endsection
