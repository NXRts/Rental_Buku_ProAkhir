@extends('layouts.mainlayout')

@section('title', 'Add Book')

@section('content')
    <h1>Add New Book</h1>

    <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="book-add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="code" class="form-label">Code</label>
                <input type="text" name="book_code" id="code" class="form-control" placeholder="Books Code" value="{{ old('book_code') }}" required>
            </div>
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title Name" value="{{ old('title') }}" required>
            </div>
            <div class="mb-2">
                <label for="cover" class="form-label">Cover</label>
                <input type="file" class="form-control" name="cover" id="cover">
            </div>
            <div class="mt-2">
                <button class="btn btn-success" type="submit">Tambah</button>
            </div>
        </form>
    </div>

@endsection