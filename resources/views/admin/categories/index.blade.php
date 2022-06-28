@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Category</h1>
    <div class="row">
        @include('partials.navbar')
        <!-- /.col sx -->
        <div class="col bg_lightslategray">
            <section id="intro">
                <div class="container">
                    <div class="row flex-column">
                        <div class="col d-flex justify-content-around m-5">
                            <h2>Esplora lista categorie</h2>

                            <form class="d-flex align-items-center" action="{{route('admin.categories.store')}}" method="post">
                                @csrf
                                <div class="mr-3">
                                    <label for="name" class="form-label mb-0">Name</label>
                                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpIdName" placeholder="Insert Name">
                                    <small id="helpIdName" class="form-text text-muted">Insert Name</small>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col introduzione-->
                        <div class="col">
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Posts Count</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <!-- /titolo categorie -->
                                <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <td scope="row">{{$category->id}}</td>
                                        <td>
                                            <form id="category-{{$category->id}}" action="{{route('admin.categories.update', $category->slug)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input class="border-0 bg-transparent" type="text" name="name" value="{{$category->name}}">
                                            </form>
                                        </td>
                                        <td>{{$category->slug}}</td>
                                        <td><span class="badge badge-info bg-dark">{{count($category->posts)}}</span></td>
                                        <td>
                                            <button form="category-{{$category->id}}" type="submit" class="btn btn-primary">Update</button>
                                            <form action="{{route('admin.categories.destroy', $category->slug)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger text-white">Cancella</button>
                                            </form>
                                            @include('partials.session_message')
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td scope="row">Nessuna categoria, aggiungi!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <!-- /contenuto categorie -->
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