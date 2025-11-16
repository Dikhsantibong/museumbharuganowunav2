@extends('layout.app')
@section('title', 'Agenda')
@section('content')
@include('components.header')

<section class="agenda ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Agenda</h1>
            </div>
        </div>
    </div>
</section>


@include('components.footer')
@endsection