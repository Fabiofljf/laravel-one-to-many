@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Home</h1>
    <div class="row">
        <div class="col-2 h_100 bg_grey">
            <h5 class="p-4 my-3 text-light">Esplora tutte le funzionalità</h5>
            <ul class="nav flex-column">
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
        <div class="col">
            <h2>Benvenuto nella tua area riservata</h2>
            <p>Qui potrai visualizzare i posts, modificarli o cancellarli e crearne dei nuovi!</p>
        </div>
        <!-- /.col dx -->
    </div>
    <!-- /.row down Dashboard -->
</section>
<!-- /#dashboard -->
@endsection