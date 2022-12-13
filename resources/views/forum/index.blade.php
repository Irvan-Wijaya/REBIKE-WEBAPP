@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/forum/search" method="POST">
                @csrf
                <div class="input-group w-100 ">
                    <input type="text" class="form-control p-3" style="height: 65px" placeholder="Search Topics"
                        aria-label="Search Topics" aria-describedby="button-addon2" name="search"
                        value="{{ request('search') }}">
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
                            <h6 class="card-subtitle mb-3 text-muted">{{ $post->user->username }}</h6>
                            <p class="card-text mb-3">{{ Str::limit($post->content, 150) }}</p>
                            <div class="d-flex">
                                <a href="#" class="h6 my-0 text-decoration-none text-dark d-block me-3"><i
                                        class="bi bi-hand-thumbs-up me-2"></i>Like</a>
                                <a href="#" class="h6 my-0 text-decoration-none text-dark d-block me-3"><i
                                        class="bi bi-hand-thumbs-down me-2"></i>Dislike</a>
                                <a href="#" class="h6 my-0 text-decoration-none text-dark d-block me-3"><i
                                        class="bi bi-chat-left-text me-2"></i>Comments</a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
        <div class="col-4">
            <a href="/forum/create" class="text-decoration-none">
                <div class="d-grid mb-3">
                    <button class="btn btn-primary py-3 text-white d-flex align-items-center justify-content-center"
                        style="border-radius: 50px" type="button">
                        <i class="bi bi-plus me-2 h3 my-0"></i><span class="h4 my-0">Create Post</span>
                    </button>
                </div>
            </a>
            <a class="d-flex align-items-center gap-3 mb-4 text-decoration-none text-dark">
                <div>
                    <img src="{{ asset('storage/profile-image/aradhanaid.png') }}" class="rounded-circle mb-3"
                        width="75px" height="75px" style="object-fit: cover">
                </div>
                <div class="">
                    <h5 class="card-title fw-bold">Aradhana Indra Daniswara</h5>
                    <p class="card-text">aradhanaid</p>
                </div>
            </a>
        </div>


    </div>
@endsection
