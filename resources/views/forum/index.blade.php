@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/forum/search" method="POST">
                @csrf
                <div class="input-group w-100">
                    <input type="text" class="form-control p-3" placeholder="Search Topics" aria-label="Search Topics"
                        aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary px-4" type="submit" id="button-addon2">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            @foreach ($posts as $post)
                <a href="/forum/post/{{ $post->slug }}" class="text-decoration-none text-dark">
                    <div class="card w-100 my-4">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $post->user->username }}</h6>
                            <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="col-4 border-start">
            <a href="/forum/create">
                <button type="button" class="btn btn-primary btn-lg text-white mb-3"><i class="bi bi-plus me-2"></i>Create
                    Post</button>
            </a>
            <div class="card w-100 text-white bg-dark">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/profile-image/aradhanaid.png') }}" class="rounded-circle mb-3" width="100px" height="100px" style="object-fit: cover">
                    <h3 class="card-title">Aradhana Indra Daniswara</h3>
                    <p class="card-text">Member since 9/12/2022</p>
                </div>
            </div>
        </div>


    </div>
@endsection
