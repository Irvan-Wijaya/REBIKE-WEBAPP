@extends('template')

@section('title', 'Dashboard')

@section('content')

<h1 class="text-center mt-3 mb-4">List Item Data</h1>

<div class="row g-3 mb-4 mt-0.5">
    <div class="col">
        <form action="/" method="GET">
            <input type="search" name="search" class="form-control" placeholder="Search Data">
        </form>
    </div>
    <div class="col">

    </div>
  </div>

<a href="/insert" class="btn btn-success mb-2">Insert +</a>

{{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif --}}

<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Item Code</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $index => $row)
        <tr>
            <th scope="row">{{ $index + $data->firstItem()}}</th>
            <td>
                <img src="{{ asset('itemPhoto/'.$row->photo) }}" alt="" style="max-width: 35px; max-height: 40px">
            </td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->price }}</td>
            <td>{{ $row->category }}</td>
            <td>{{ $row->itemcode }}</td>
            <td>
                <a href="/update/{{ $row->id }}" class="btn btn-warning">Update</a>
                <a href="#" class="btn btn-outline-danger delete" data-id="{{ $row->id }}" data-name="{{ $row->name }}">Delete</a>
            </td>
          </tr>
          @endforeach
    </tbody>
  </table>

  {{ $data->links() }}

@endsection
