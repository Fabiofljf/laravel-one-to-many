@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="p-4 mb-0 border shadow text-center">Dashboard-Home</h1>
    <div class="row">
        @include('partials.navbar')
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