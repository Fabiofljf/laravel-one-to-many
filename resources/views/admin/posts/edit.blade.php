@extends('layouts.admin')

@section('content')
<section id="edit_dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Edit</h1>
    <div class="row">
        <div class="col-2 bg_grey">
            <h5 class="p-4 my-3 text-light">Esplora tutte le funzionalità</h5>
            <ul class="nav flex-column p-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <!-- /Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Posts
                    </a>
                </li>
                <!-- /Posts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.create') }}">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Add Post
                    </a>
                </li>
                <!-- /Add Post -->
            </ul>
        </div>
        <!-- /.col sx -->
        <div class="col bg_lightslategray">
            <form action="{{route('admin.posts.update', $post->slug)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="title" class="col-xs-4 col-form-label">Title</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control @error('title') is_invalid @enderror" name="title" id="inputName" placeholder="American Vampire..." value="{{old('title')}}">
                    </div>
                    <small id="helpId" class="text-muted">type title here</small>
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <!-- /title -->
                <div class="mb-3 row">
                    <label for="thumb" class="col-xs-4 col-form-label">Thumb</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control @error('thumb') is_invalid @enderror" name="thumb" id="inputName" placeholder="https://..." value="{{old('thumb')}}">
                    </div>
                    <small id="helpId" class="text-muted">type thumb here</small>
                    @error('thumb')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <!-- /thumb -->
                <div class="mb-3 row">
                    <label for="description" class="col-xs-4 col-form-label">Description</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control @error('description') is_invalid @enderror" name="description" id="inputName" placeholder="lorem..." value="{{old('description')}}">
                    </div>
                    <small id="helpId" class="text-muted">type description here</small>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <!-- /description -->
                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Invia!</button>
                    </div>
                </div>
                <!-- btn invio-->
            </form>
        </div>
        <!-- /.col dx -->
    </div>
</section>
<!-- /#dashboard -->
@endsection