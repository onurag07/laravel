@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                <a href="/profile/{{  $post->user->id  }}">
                    <img src="/storage/{{ $post->image }}" class="img-responsive w-100">
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="pt-2 pb-4">
                        <span>
                            <a href="/profile/{{  $post->user->id  }}" class="text-dark">{{  $post->user->username  }}</a>
                        </span> {{  $post->caption  }}
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{  $posts->links()  }}
            </div>
        </div>
    </div>
@endsection
