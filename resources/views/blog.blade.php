@extends('components.layout.main')

@section('content')

    <div class="row triangle-background-reverse mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            @foreach ($blogposts as $blogpost)
                <div class="backgroundcolorblog">
                    <section class="section1">
                        <article class="article">
                            <header>
                                <h1 class="textcolorblog">{{ $blogpost->title }}</h1>
                                <p class="textcolorblog">{{ $blogpost->introtext }}</p>
                            </header>
                            <p class="textcolorblog">{{ $blogpost->smalltext }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/posts/' . $blogpost->id) }}"
                                    class="btn btn-primary mb-2">
                                    View Post #{{ $blogpost->id }}
                                </a>
                                <button type="button"
                                        class="btn btn-danger mb-2 deletebuttonstyle"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-id="{{ $blogpost->id }}">
                                    Delete
                                </button>
                            </div>
                        </article>
                    </section>
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Sluiten"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this post?
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
            let postId = button.getAttribute('data-id');
            let form = document.getElementById('deleteForm');
            form.action = `/posts/${postId}`;
        });
    });
</script>
