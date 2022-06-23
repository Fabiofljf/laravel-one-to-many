@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Posts</h1>
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
                            <button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">
                                <a class="text-light text-uppercase" href="{{ route('admin.posts.create') }}">Aggiungi</a>
                            </button>
                        </div>
                        <!-- /.col introduzione-->
                        <div class="col">
                            <table style="width:100%">
                                <tr class="border text-center">
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Thumb</th>
                                    <th>Description</th>
                                </tr>
                                <!-- /tab superiore -->
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="border p-2">{{$post->id}}</td>
                                    <td class="border p-2">{{$post->title}}</td>
                                    <td class="border p-2"><img width=300 src="{{$post->thumb}}" alt="{{$post->title}}"></td>
                                    <td class="border p-2">{{$post->description}}</td>
                                    <td class="border p-3 my-1">
                                        <a class="btn btn-primary" href="{{route('admin.posts.show', $post->slug)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                        </a>
                                        <!-- /view -->
                                        <a class="btn btn-secondary my-2" href="{{route('admin.posts.edit', $post->slug)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                        <!-- /edit -->

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-post-{{$post->slug}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete-post-{{$post->slug}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle {{$post->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete current</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this post?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                                                        <form action="{{route('admin.posts.destroy', $post->slug)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /delete -->
                                    </td>
                                </tr>
                                <!-- /tab dati -->
                                @endforeach
                            </table>
                        </div>
                        <!-- /.col lista tabella-->
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