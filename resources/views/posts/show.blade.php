@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img style="width:100%" src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="col-4 pt-5">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" alt="rounded-circle w-100" style="max-width: 40px;">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a class="pl-2" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span> 
                        </a>
                        <a href="#" class="pl-2">Follow</a>
                    </div>
                </div>
                
            </div>

            <hr>

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
</div>
@endsection
