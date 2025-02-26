@extends('components.layout.main')

@section('content')

    <div class="row triangle-background-reverse mt-4">

        <div class="col-sm-2">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createBlogModal">
                New blogpost
            </button>
        </div>

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
                                        class="btn btn-warning mb-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editBlogModal{{ $blogpost->id }}">
                                    Update
                                </button>

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

<!-- Modal for delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Sluiten">Close</button>
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

<!-- JS for delete modal -->
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


<!-- Modal for create-->
<div class="modal fade" id="createBlogModal" tabindex="-1" aria-labelledby="createBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createBlogModalLabel">New blogpost</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('blogposts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="introtext" class="form-label">Intro</label>
                        <textarea class="form-control" id="introtext" name="introtext" rows="2" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="smalltext" class="form-label">Short text</label>
                        <textarea class="form-control" id="smalltext" name="smalltext" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Whole text</label>
                        <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal for updating the posts -->
<div class="modal fade" id="editBlogModal{{ $blogpost->id }}" tabindex="-1" aria-labelledby="editBlogModalLabel{{ $blogpost->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBlogModalLabel{{ $blogpost->id }}">Update Blogpost</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('blogposts.update', $blogpost->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $blogpost->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="introtext" class="form-label">Intro</label>
                        <textarea class="form-control" id="introtext" name="introtext" rows="2" required>{{ $blogpost->introtext }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="smalltext" class="form-label">Short text</label>
                        <textarea class="form-control" id="smalltext" name="smalltext" rows="3" required>{{ $blogpost->smalltext }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Whole Text</label>
                        <textarea class="form-control" id="text" name="text" rows="4" required>{{ $blogpost->text }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
