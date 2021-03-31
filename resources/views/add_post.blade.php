@extends('layouts.app')
@section('content')
<div class="page-content-wrapper">
    <div class="element-wrapper">
        <div class="container">
            <h6 class="mb-3 newsten-title">Add post</h6>
        </div>

        <div class="container">
            @foreach ($errors->all() as $err)
                <p class="text-danger">{{ $err }}</p>
            @endforeach
            <form action="{{ route('upload-post') }}" method="post" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="music">Music</option>
                        <option value="sports">Sports</option>
                        <option value="wealth">Wealth</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" class="form-control" rows="3"></textarea>
                </div>

                <button class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection
