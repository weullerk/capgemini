@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 course-menu">
    <a class="navbar-brand  menu-item" href="{{ url("/cursos") }}">Cursos</a>

    <form name="search-form" action="{{ url("/pesquisar/") }}/" class="form-inline my-2 my-lg-0 course-search menu-item">
        <button class="btn btn-icon my-2 my-sm-0" type="submit"><i class="material-icons">search</i></button>
        <input class="form-control mr-sm-2 pl-2" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
    </form>

    <div class="menu-item"></div>
</nav>

<div class="container">
    <div class="card-columns">

    @foreach($courses as $course)
    <div class="card">
        <div class="card-body">
            <h6 class="card-subtitle mb-3 text-muted"><small>{{ $course->category }}</small></h6>
            <h5 class="card-title course-title mb-1"><a href="{{ url("/cursos/detalhes/{$course->id}") }}">{{ $course->title }}</a></h5>
            <p class="card-text text-muted">{{ $course->address->city }}</p>
        </div>
        <div class="card-footer text-muted">
            <div class="mt-1">{{ $course->start }}</div>
            <div class="card-footer-icon"><i class="material-icons">calendar_today</i></div>
        </div>
    </div>

    @endforeach

    </div>
</div>
@endsection