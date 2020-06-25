@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
        <img src="{{  $user->profile->profileImage()  }}" alt="" class="rounded-circle" style="max-height:200px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-item-baseline">
                <div>{{ $user->username }}</div>
            <follow-button user-id="{{  $user->id  }}" follow="{{  $follows  }}"></follow-button>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan

                @can('update', $user->profile)
                    <a href="/profile/{{  $user->id  }}/edit">Edit Post</a>
                @endcan

            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{  $postsCount  }}</strong> Post</div>
            <div class="pr-5"><strong>{{  $followersCount  }}</strong> Followers</div>
            <div class="pr-5"><strong>{{  $followingCount  }}</strong> Following</div>
            </div>
            <div>Anurag Kumar Yadav 🔵</div>
            <div>{{ $user->profile->title ?? 'N/A' }}</div>
            <div>{{ $user->profile->description ?? 'N/A' }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>

    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-3">
                <a href="/p/{{  $post->id  }}">
                    <img src="/storage/{{  $post->image  }}" alt="{{  $post->image  }}" class="w-100">
                </a>
            </div>
        @endforeach()

    </div>
</div>
@endsection
