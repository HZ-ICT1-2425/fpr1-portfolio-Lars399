@extends('components.layout.main')

@section('content')

    <div class="row triangle-background mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            @foreach ($faqposts as $faqpost)
                <div class="backgroundcolorblog faqsection1">
                    <h1 class="textcolorfaqh1">{{ $faqpost->title }}</h1><br>
                    <p class="textcolorfaq">{{ $faqpost->text }}</p>
                    <br><br>
                    <button type="button"
                            class="btn btn-danger mb-2 deletebuttonstyle"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            data-id="{{ $faqpost->id }}">
                        Delete
                    </button>
                </div>
            @endforeach
        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
