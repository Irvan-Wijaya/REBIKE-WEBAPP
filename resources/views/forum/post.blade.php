@extends('layouts.main')

@section('content')
    <div class="row w-100 mx-0 justify-content-center">
        <div class="col-8">
            <a href="../" class="d-flex align-items-center gap-2 mb-3 text-decoration-none text-dark">
                <i class="h5 bi bi-arrow-left-short m-0"></i>
                <p class="my-0">Back</p>
            </a>
            @auth
                @if (Auth::user()->username === $post->user->username)
                    <span class="badge text-bg-primary text-white py-2 px-3 mb-3 fw-normal">Your Post</span>
                @endif
            @endauth
            <div class="d-flex align-items-center gap-3 mb-4">
                <div>
                    <img src="{{ $post->user->image !== null ? asset('storage/user-profile-image/' . $post->user->image) : asset('storage/user-profile-image/profile-image-default.jpg') }}"
                        class="rounded-circle" width="50px" height="50px" style="object-fit: cover">
                </div>
                <div>
                    <h6 class="card-title fw-bold">{{ $post->user->name }}</h6>
                    <p class="card-text"><small>{{ $post->user->username }}</small></p>
                </div>
            </div>
            <h1 class="h2 mb-4">{{ $post->title }}</h1>

            {!! $post->content !!}
            <h5 class="mt-5">Comments</h5>

        </div>
    </div>
@endsection
