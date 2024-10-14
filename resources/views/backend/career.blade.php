@extends('backend.app')
@section('title', 'Career')

@section('content')
    <div class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div id="app" class="content-wrapper">
                        <div class="pt-5 px-5">
                            <div class="card">
                                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Career</h3>
                                </div>

                                <!-- Success/Error Modals -->
                                <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="messageModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="messageModalBody"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form id="careerForm" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        {{-- <!-- Career Text Section -->
                                        <div class="mb-3">
                                            <label for="career_text" class="form-label">Career Text</label>
                                            <textarea class="form-control summernote" name="career_text" rows="6">{{ $content->career_text ?? '' }}</textarea>
                                        </div> --}}

                                        <!-- Career Images Upload Section -->
                                        <div class="mb-4">
                                            <h4>Career Images (265 × 150)</h4>
                                            <table class="table table-bordered table-hover align-middle table-striped">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Preview</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['career_image_1', 'career_image_2', 'career_image_3', 'career_image_4'] as $index => $imageField)
                                                        <tr>
                                                            <td>Career Image {{ $index + 1 }}</td>
                                                            <td>
                                                                @if ($content && $content->{$imageField})
                                                                    <img src="{{ asset($content->{$imageField}) }}"
                                                                        alt="Career Image {{ $index + 1 }}"
                                                                        class="img-fluid rounded shadow-sm"
                                                                        style="max-width: 70px; height: auto;">
                                                                @else
                                                                    <span class="text-muted">No Image Uploaded</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="file"
                                                                    class="form-control border-0 shadow-sm rounded"
                                                                    name="{{ $imageField }}" accept="image/*">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- FAQs Section -->
                                        <div class="mb-3">
                                            <label for="faqs" class="form-label">FAQs</label>
                                            <button type="button" class="btn btn-primary btn-sm float-end ml-2"
                                                data-bs-toggle="modal" data-bs-target="#addFaqModal">
                                                Add FAQ
                                            </button>
                                            <div class="table-responsive mt-4">
                                                <table class="table table-bordered table-hover align-middle table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>FAQ Title</th>
                                                            <th>FAQ Answer</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $faqs = json_decode($content->faqs ?? '[]', true);
                                                        @endphp
                                                        @foreach ($faqs as $index => $faq)
                                                            <tr>
                                                                <td>{{ $faq['title'] }}</td>
                                                                <td>{{ $faq['answer'] }}</td>
                                                                <td class="text-center d-flex">
                                                                    <button class="btn btn-info btn-sm me-2"
                                                                        onclick="editFaq('{{ $index }}', '{{ addslashes($faq['title']) }}', '{{ addslashes($faq['answer']) }}')">Edit</button>
                                                                    <button class="btn btn-danger btn-sm ml-2"
                                                                        onclick="confirmDeleteFaq('{{ $index }}')">Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Career Content</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Add FAQ Modal -->
    <div class="modal fade" id="addFaqModal" tabindex="-1" aria-labelledby="addFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaqModalLabel">Add FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addFaqForm">
                        <div class="mb-3">
                            <label for="faqTitle" class="form-label">FAQ Title</label>
                            <input type="text" class="form-control" id="faqTitle" name="faq_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="faqAnswer" class="form-label">FAQ Answer</label>
                            <textarea class="form-control summernote" id="faqAnswer" name="faq_answer" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveFaq">Add FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit FAQ Modal -->
    <div class="modal fade" id="editFaqModal" tabindex="-1" aria-labelledby="editFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFaqModalLabel">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editFaqForm">
                        <input type="hidden" id="faqIndex">
                        <div class="mb-3">
                            <label for="editFaqTitle" class="form-label">FAQ Title</label>
                            <input type="text" class="form-control" id="editFaqTitle" name="faq_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="editFaqAnswer" class="form-label">FAQ Answer</label>
                            <textarea class="form-control summernote" id="editFaqAnswer" name="faq_answer" rows="3" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="updateFaq">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteFaqModal" tabindex="-1" aria-labelledby="deleteFaqModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteFaqModalLabel">Delete FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this FAQ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteFaq">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set the height of the editor
                tabsize: 2,
                placeholder: 'Enter career description here...',
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


        document.getElementById('careerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch('{{ route('backend.career_content.update') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showModalMessage('Success', 'Career content updated successfully.');
                        setTimeout(() => location.reload(), 3000); // Reload after 3 seconds
                    } else {
                        showModalMessage('Error', 'Error updating career content.');
                    }
                })
                .catch(error => showModalMessage('Error', 'Error updating career content.'));
        });

        document.getElementById('saveFaq').addEventListener('click', function() {
            const title = document.getElementById('faqTitle').value;
            const answer = document.getElementById('faqAnswer').value;

            if (title && answer) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('{{ route('backend.faq.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            title,
                            answer
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showModalMessage('Success', 'FAQ added successfully.');
                            setTimeout(() => location.reload(), 3000); // Reload after 3 seconds
                        } else {
                            showModalMessage('Error', 'Error adding FAQ.');
                        }
                    })
                    .catch(error => showModalMessage('Error', 'Error adding FAQ.'));
            }
        });

        function editFaq(index, title, answer) {
            document.getElementById('faqIndex').value = index;
            document.getElementById('editFaqTitle').value = title;
            document.getElementById('editFaqAnswer').value = answer;

            var editModal = new bootstrap.Modal(document.getElementById('editFaqModal'));
            editModal.show();

            document.getElementById('updateFaq').onclick = function() {
                const updatedTitle = document.getElementById('editFaqTitle').value;
                const updatedAnswer = document.getElementById('editFaqAnswer').value;
                const index = document.getElementById('faqIndex').value;

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('{{ route('backend.faq.update') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            index,
                            title: updatedTitle,
                            answer: updatedAnswer
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showModalMessage('Success', 'FAQ updated successfully.');
                            setTimeout(() => location.reload(), 3000); // Reload after 3 seconds
                        } else {
                            showModalMessage('Error', 'Error updating FAQ.');
                        }
                    })
                    .catch(error => showModalMessage('Error', 'Error updating FAQ.'));
            };
        }

        function confirmDeleteFaq(index) {
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteFaqModal'));
            deleteModal.show();

            document.getElementById('confirmDeleteFaq').onclick = function() {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('{{ route('backend.faq.delete') }}', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            index
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showModalMessage('Success', 'FAQ deleted successfully.');
                            setTimeout(() => location.reload(), 3000); // Reload after 3 seconds
                        } else {
                            showModalMessage('Error', 'Error deleting FAQ.');
                        }
                    })
                    .catch(error => showModalMessage('Error', 'Error deleting FAQ.'));
            };
        }

        function showModalMessage(title, message) {
            const modal = new bootstrap.Modal(document.getElementById('messageModal'));
            document.getElementById('messageModalLabel').textContent = title;
            document.getElementById('messageModalBody').textContent = message;
            modal.show();
            setTimeout(() => {
                modal.hide();
            }, 3000);
        }
    </script>
@endsection
