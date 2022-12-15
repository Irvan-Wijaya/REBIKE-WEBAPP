@extends('layouts.main')

@section('content')
    <div class="row w-100 mx-0 justify-content-center">
        <div class="col-8">
            <h1 class="mb-4">
                <a href="/forum" class="text-dark"><i class="bi bi-arrow-left-short me-3"></i></a>Create Post
            </h1>
            <div class="d-flex align-items-center gap-3 mb-4">
                <div>
                    <img src="{{ Auth::user()->image !== null ? asset('storage/user-profile-image/' . Auth::user()->image) : asset('storage/user-profile-image/profile-image-default.jpg') }}"
                        class="rounded-circle" width="75px" height="75px" style="object-fit: cover">
                </div>
                <div>
                    <h5 class="card-title fw-bold">{{ Auth::user()->name }}</h5>
                    <p class="card-text">{{ Auth::user()->username }}</p>
                </div>
            </div>
            <form action="/forum/create" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                    <trix-editor input="content"></trix-editor>
                    @error('body')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary py-3 px-5 text-white d-flex align-items-center justify-content-center"
                    type="submit">
                    <i class="bi bi-plus me-2 my-0"></i><span class="my-0">Create Post</span>
                </button>
            </form>
        </div>
    </div>
@endsection
