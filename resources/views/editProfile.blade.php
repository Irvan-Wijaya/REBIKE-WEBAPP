@extends('layouts.main')

@section('content')
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ Auth::user()->image !== null ? asset('storage/user-profile-image/' . Auth::user()->image) : asset('storage/user-profile-image/profile-image-default.jpg') }}"
                            alt="" style="max-width: 300px; width: 100%;">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="/updateProfile" enctype="multipart/form-data" method="POST">
                            @csrf
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="Enter your username" name="username" value="{{ Auth::user()->username }}">
                            </div>
                            <!-- Form Row (Full Name)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Full Name (how your name will appear to other
                                    users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="Enter your username" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <!-- Form Group (image)-->
                            <div class="mb-3">
                                <label class="form-label" for="customFile">Default file input example</label>
                                <input type="file" class="form-control" name="image" id="customFile" />
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
