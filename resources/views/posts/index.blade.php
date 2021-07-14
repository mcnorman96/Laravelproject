@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id}}">
                <img style="width:100%" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-8 offset-2">
            <p>
                <span class="font-weight-bold pr-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a> 
                {{ $post->caption }}
                </span>
            </p>

        </div>
    </div>

    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
