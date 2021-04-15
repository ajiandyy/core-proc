@extends('layouts.main')

@section('title', __('Post'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Post</div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="postID" class="form-label">Post ID</label>
                                    <input type="text" class="form-control" id="postID" name="postID" value="{{ $post->postID }}" readonly required/>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" readonly required/>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="author" class="form-label">Written By</label>
                                    <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}" readonly required/>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="created_at" class="form-label">Date Created</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $post->created_at }}" readonly required/>
                                </div>
                            </div>
                            @if($post->updated_at != NULL)
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="updated_at" class="form-label">Date Updated</label>
                                    <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $post->updated_at }}" readonly required/>
                                </div>
                            </div>
                            @endif
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea type="text" class="form-control" id="content" name="content" rows="4" readonly required>{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <center><a href="{{ route('home') }}" class="btn btn-secondary btn-lg">Back</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--col-md-8-->
        </div><!--row-->
    </div>
@endsection
