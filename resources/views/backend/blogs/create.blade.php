@extends('backend.app')

@section('title', 'Create Blog')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create Blog</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.blogs.index') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to blogs
                    </a>
                </div>
                <div class="card-body">
                    <!-- Show Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('backend.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span> <!-- Show error for title -->
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <div class="checkbox-group">
                                @foreach ($tags as $tag)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="tag_{{ $tag->id }}"
                                            name="tags[]" value="{{ $tag->id }}">
                                        <label class="form-check-label" for="tag_{{ $tag->id }}">
                                            {{ $tag->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control summernote" id="content" name="content" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image (780 ×
                                520)</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Create Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')


@endsection
