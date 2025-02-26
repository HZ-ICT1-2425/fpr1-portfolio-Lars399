@extends('components.layout.main')

@section('content')

    <div class="row triangle-background mt-4">
        <div class="col-sm-2">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createFaqModal">
                Create new FAQ post
            </button>
        </div>

        <div class="col-sm-8">
            @foreach ($faqposts as $faqpost)
                <div class="backgroundcolorblog faqsection1">
                    <h1 class="textcolorfaqh1">{{ $faqpost->title }}</h1><br>
                    <p class="textcolorfaq">{{ $faqpost->text }}</p>
                    <br><br>

                    <!-- Update knop -->
                    <button type="button"
                            class="btn btn-warning mb-3"
                            data-bs-toggle="modal"
                            data-bs-target="#editFaqModal{{ $faqpost->id }}">
                        Update
                    </button>

                    <!-- Delete knop -->
                    <button type="button"
                            class="btn btn-danger mb-2 deletebuttonstyle"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            data-id="{{ $faqpost->id }}">
                        Delete
                    </button>
                </div>

                <!-- Modal for update -->
                <div class="modal fade" id="editFaqModal{{ $faqpost->id }}" tabindex="-1" aria-labelledby="editFaqModalLabel{{ $faqpost->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editFaqModalLabel{{ $faqpost->id }}">Update FAQ post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('faq.update', $faqpost->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="title-{{ $faqpost->id }}" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title-{{ $faqpost->id }}" name="title" value="{{ $faqpost->title }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text-{{ $faqpost->id }}" class="form-label">Text</label>
                                        <textarea class="form-control" id="text-{{ $faqpost->id }}" name="text" rows="4" required>{{ $faqpost->text }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection

<!-- Modal for delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this FAQ post?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JS for delete -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget;
            let faqId = button.getAttribute('data-id');
            let form = document.getElementById('deleteForm');
            form.action = `/faqs/${faqId}`;
        });
    });
</script>

<!-- Modal for creating new FAQ-->
<div class="modal fade" id="createFaqModal" tabindex="-1" aria-labelledby="createFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFaqModalLabel">Create new FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('faq.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
