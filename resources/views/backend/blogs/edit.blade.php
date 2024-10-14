@extends('backend.app')

@section('title', 'Edit Blog')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray">
                    <h3 class="card-title">Edit Blog</h3>
                    <a href="{{ route('backend.blogs.index') }}" class="btn btn-success ml-auto"
                        style="color: #f8fbff !important;">
                        <i class="fas fa-arrow-left"></i>
                        Back to blogs
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.blogs.update', $blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Change to PUT or PATCH -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $blog->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tags Section -->
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <div class="checkbox-list">
                                @foreach ($tags as $tag)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tags[]"
                                            value="{{ $tag->id }}" id="tag{{ $tag->id }}"
                                            {{ $blog->tags->contains($tag->id) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="tag{{ $tag->id }}">
                                            {{ $tag->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control summernote" id="content" name="content" rows="4" required>{{ $blog->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image (780 ×
                                520)</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($blog->image)
                                <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid mt-2">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Update Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                tabsize: 2,
                placeholder: 'Enter blog content here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
