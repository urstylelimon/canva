@extends('backend.app')

@section('title', 'Image Slider Management')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Image Slider Management</h3>
                    <button data-bs-toggle="modal" data-bs-target="#addSliderModal" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Add New Slider
                    </button>
                </div>
                <div class="card-body">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Slider Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sliders as $index => $slider)
                                    <!-- Use index for ID -->
                                    <tr>
                                        <td>{{ $index + 1 }}</td> <!-- Show sequential ID starting from 1 -->
                                        <td><img src="{{ asset('media/sliders/' . $slider->image) }}" width="75"
                                                alt="Slider Image"></td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->caption }}</td>
                                        <td>
                                            <!-- Actions -->
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editSliderModal{{ $slider->id }}">
                                                <i class="fas fa-eye"></i> Edit
                                            </button>

                                            <form action="{{ route('backend.sliders.destroy', $slider->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this slider?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Slider Modal -->
                                    <div class="modal fade" id="editSliderModal{{ $slider->id }}" tabindex="-1"
                                        aria-labelledby="editSliderModalLabel{{ $slider->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSliderModalLabel{{ $slider->id }}">
                                                        Edit Slider</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('backend.sliders.update', $slider->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                value="{{ $slider->title }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="caption" class="form-label">Caption</label>
                                                            <textarea name="caption" class="form-control">{{ $slider->caption }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Image (1920 ×
                                                                1080)</label>
                                                            <input type="file" name="image" class="form-control">
                                                            <small>Current Image: <img
                                                                    src="{{ asset('media/sliders/' . $slider->image) }}"
                                                                    width="75"></small>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Slider</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No sliders found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Slider Modal -->
        <div class="modal fade" id="addSliderModal" tabindex="-1" aria-labelledby="addSliderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSliderModalLabel">Add New Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('backend.sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <textarea name="caption" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (1920 ×
                                    1080)</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Slider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Auto-hide success messages after a few seconds
            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 3000);
        });
    </script>
@endsection
