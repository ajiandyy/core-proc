@extends('layouts.main')

@section('title', __('Edit'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div class="card-body">
                        <form action="{{ action('PostController@update', $post->postID) }}" method="POST">
                            @csrf
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="postID" class="form-label">Post ID</label>
                                    <input type="text" class="form-control" id="postID" name="postID" value="{{ $post->postID }}" readonly required/>
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
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required/>
                                    @if ($errors->has('title'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="author" class="form-label">Written By</label>
                                    <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}" required/>
                                    @if ($errors->has('author'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('author') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea type="text" class="form-control" id="content" name="content" rows="4" required>{{ $post->content }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <center><button class="btn btn-secondary btn-lg">Update</button></center>
                                </div>
                            </div>
                        </form>
                        <div class="col-md">
                            <div class="form-group">
                                <center><a href="{{ route('home') }}" class="btn btn-secondary btn-lg">Back</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-md-8-->
        </div><!--row-->
    </div>
@endsection
