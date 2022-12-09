@extends('layouts.main')

@section('content')
    <div class="row w-100 mx-0 justify-content-center">
        <div class="col-8">
            <h1 class="mb-4">
                <a href="/forum" class="text-dark"><i class="bi bi-chevron-left me-3"></i></a>Create Post
            </h1>
            <div class="d-flex align-items-center gap-3 mb-4">
                <div>
                    <img src="{{ asset('storage/profile-image/aradhanaid.png') }}" class="rounded-circle" width="75px" height="75px" style="object-fit: cover">
                </div>
                <div>
                    <h5 class="card-title fw-bold">Aradhana Indra Daniswara</h5>
                    <p class="card-text">aradhanaid</p>
                </div>
            </div>
            <form action="/forum/create" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
                  </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <a href="/forum/create" class="text-decoration-none">

                    <button class="btn btn-primary py-3 px-5 text-white d-flex align-items-center justify-content-center"
                        type="button">
                        <i class="bi bi-plus me-2 my-0"></i><span class="my-0">Create Post</span>
                    </button>

                </a>
            </form>
        </div>
    </div>
@endsection
