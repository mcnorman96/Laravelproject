@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3">
        <h1>{{ $user->username }}</h1>
    </div>
    <div class="col9">
    <a href="#">Add new post</a>
    <div class="follow" style="display:flex; justify-content: space-between;">
        <div>Posts</div>
        <div style="margin-left: 50px">Follows</div>
        <div style="margin-left: 50px">Following</div>
    </div>
    <div class="description">
        <div>{{ $user->profile->title }}</div>        
        <div>{{ $user->profile->description }}</div>
        <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
    </div>
    </div>
   </div>

   <div class="row pt-5 ">
    <div class="col-4">
        <img style="width: 100%" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="">
    </div>
    <div class="col-4">
        <img style="width: 100%" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="">
    </div>
    <div class="col-4">
        <img style="width: 100%" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="">
    </div>
   </div>
</div>
@endsection
