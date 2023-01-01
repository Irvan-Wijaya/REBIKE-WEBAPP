@extends('adminlayout')
@section('title', 'Update Data')

@section('content')
<h1 class="text-center mt-2 mb-4">Update Item</h1>
<div class="row justify-content-center">
    <div class="col-7">
        <div class="card">
            <div class="card-body">
                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="">
                    </div> --}}

                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{ $data->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select form-select-sm" name="category" aria-label=".form-select-sm example">
                            <option selected>{{ $data->category }}</option>
                            <option value="Bicycle">Bicycle</option>
                            <option value="Spare Parts">Spare Parts</option>
                            <option value="Accessories">Accessories</option>
                          </select>
                      </div>

                      <div class="mb-3">
                        <label for="itemcode" class="form-label">Item Code</label>
                        <input type="text" name="itemcode" class="form-control" id="itemcode" value="{{ $data->itemcode }}">
                      </div>

                    <button type="submit" class="btn btn-success mr-3">Submit</button>
                    <a href="/dashboard" type="cancel" class="btn btn-outline-primary">Cancel</a>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
