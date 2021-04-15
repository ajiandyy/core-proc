@extends('layouts.main')

@section('title', __('Home'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8-md">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <a href="{{ action('PostController@add') }}" class="btn btn-lg btn-secondary mb-4">Add Post</a>
                        @if(session('updated'))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your have successfully updated the post.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @elseif(session('deleted'))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your have successfully deleted the post.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @elseif(session('added'))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your have successfully added the post.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Post ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->postID }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td>
                                        <a href="{{ action('PostController@view', $post->postID) }}" class="btn btn-secondary">
                                            <i class="fas fa-fw fa-x fa-check text-white" title="View"></i>
                                            <span class="text-white">View</span>
                                        </a>
                                        <a href="{{ action('PostController@edit', $post->postID) }}" class="btn btn-secondary">
                                            <i class="fas fa-fw fa-x fa-check text-white" title="Edit"></i>
                                            <span class="text-white">Edit</span>
                                        </a>
                                        <a href="{{ action('PostController@delete', $post->postID) }}" class="btn btn-secondary">
                                            <i class="fas fa-fw fa-x fa-check text-white" title="Delete"></i>
                                            <span class="text-white">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready( function () {
            $('.table').DataTable();
        } );
    </script>
@endpush