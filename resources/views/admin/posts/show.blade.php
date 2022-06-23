@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Post</h1>
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
            <section id="intro">
                <div class="container">
                    <div class="row flex-column">
                        <div class="col d-flex justify-content-around m-5">
                            <h2>Esplora tutta la lista!</h2>
                        </div>
                        <!-- /.col introduzione-->
                        <div class="col">
                            <div class="card text-start d-flex">
                                <img class="card-img-top" style="width:250px" src="{{$post->thumb}}" alt="{{$post->title}}">
                                <div class="card-body">
                                    <h4 class="card-title">{{$post->title}}</h4>
                                    <p class="card-text">{{$post->description}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col singola card-->
                    </div>
                </div>
            </section>
            <!-- /#intro -->
        </div>
        <!-- /.col dx -->
    </div>
</section>
<!-- /#dashboard -->
@endsection