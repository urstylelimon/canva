@extends('backend.app')

@section('title', 'Create New Product')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create New Product</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.new_products.index') }}" class="btn btn-info ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to New Products
                    </a>
                </div>
                <div class="card-body">
                    <form id="productForm" action="{{ route('backend.new_products.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <!-- Short Description -->
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control summernote" name="short_description" id="short_description" style="height: 400px;"></textarea>
                        </div>

                        <!-- Long Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Long Description</label>
                            <textarea name="description" id="description" class="form-control summernote" style="height: 400px;"></textarea>
                        </div>

                        <!-- Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Product Logo (120 × 115)</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="mb-3">
                            <label for="thumb_image" class="form-label">Thumbnail Image (450 × 280)</label>
                            <input type="file" name="thumb_image" id="thumb_image" class="form-control">
                        </div>

                        <!-- Banner Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Banner Image (1920 × 400)</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <!-- Navmenu Image -->
                        <div class="mb-3">
                            <label for="navmenu_image" class="form-label">Navmenu Image (650 × 400)</label>
                            <input type="file" name="navmenu_image" id="navmenu_image" class="form-control">
                        </div>

                        <!-- Brochure -->
                        <div class="mb-3">
                            <label for="brochure" class="form-label">Brochure (PDF)</label>
                            <input type="file" name="brochure" id="brochure" class="form-control">
                        </div>

                        <!-- Video URL -->
                        <div class="mb-3">
                            <label for="video_url" class="form-label">Video URL (youtube url)</label>
                            <input type="text" name="video_url" id="video_url" class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Create New Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- @vite('resources/js/ckeditor/ckeditor.js') --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set editor height
                minHeight: null, // Set minimum height of editor
                maxHeight: null, // Set maximum height of editor
                focus: true // Set focus to editable area after initializing summernote
            });
        });

        // Custom form validation before submission
        document.getElementById('productForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Check for CKEditor content
            document.querySelectorAll('.ckeditor').forEach((element) => {
                const editorData = element.nextSibling.querySelector('.ck-content').innerText.trim();
                if (!editorData) {
                    isValid = false;
                    alert('Please fill in all required fields.');
                    event.preventDefault(); // Prevent form submission
                }
            });

            return isValid;
        });
    </script>
@endsection
