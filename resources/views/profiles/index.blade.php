@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-2">
        <img src="{{ $user->profile->profileImage() }}" class="w-100 rounded-circle" alt="">
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profilelink </a>
            @endcan
    </div>
    <div class="col-9">
    
    <div class="d-flex align-items-center">
        <h1>{{ $user->username }}</h1>
        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
    </div>
    

    @can('update', $user->profile)
        <a href="/p/create">Add new post</a>
    @endcan
    
    <div class="follow" style="display:flex;">
        <div><strong>{{ $postcount }}</strong> Posts</div>
        <div style="margin-left: 50px"><strong>{{ $followersCount }}</strong> Followers</div>
        <div style="margin-left: 50px"><strong>{{ $followingCount }}</strong> Following</div>
    </div>
    <div class="description pt-3">
          
        <div>{{ $user->profile->description }}</div>
        <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
    </div>
    </div>
   </div>

   <div class="row pt-5 ">
    @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img style="width: 100%" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
    @endforeach
   </div>
</div>
@endsection
