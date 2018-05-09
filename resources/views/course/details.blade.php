@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 detail-menu">
  <a class="navbar-brand" href="{{  url("/cursos") }}"><i class="material-icons">arrow_back</i></a>
</nav>

<div class="container">
    <div class="card col-md-8 offset-md-2">
        <div class="card-body">
            <h5 class="card-title detail-title mb-3">{{ $course->title }}</h5>
            <p class="card-text text-muted">{{ $course->description }}</p>

            <div class="text-muted">
                <div class="datail-informations mb-3">
                    <div><i class="material-icons">calendar_today</i></div>
                    <div class="pt-1 ml-3">{{ $course->start }}</div>
                </div>

                <div class="datail-informations mb-3">
                    <div><i class="material-icons">alarm</i></div>
                    <div class="pt-1 ml-3">{{ $course->start }}</div>
                </div>

                <div class="datail-informations mb-3">
                    <div><i class="material-icons">location_on</i></div>
                    <div class="pt-1 ml-3"><a href="#">{{ $course->address->street }}, {{ $course->address->number }} - {{ $course->address->city }}</a></div>
                </div>

                <div class="datail-informations mb-3">
                    <div><i class="material-icons">attach_money</i></div>
                    <div class="pt-1 ml-3">R$ {{ $course->price }},00</div>
                </div>

                <div class="datail-informations mb-3">
                    <div><i class="material-icons">label</i></div>
                    <div class="pt-1 ml-3">{{ $course->category }}</div>
                </div>

                <div class="datail-informations mb-3">
                    <div><i class="material-icons">person</i></div>
                    <div class="pt-1 ml-3">{{ $course->consultant->name }}</div>
                </div>
            </div>

            <div class="detail-inscription">
                <button type="button" class="btn btn-raised btn-warning">Inscrição</button>
            </div>
        </div>
    </div>
</div>
@endsection