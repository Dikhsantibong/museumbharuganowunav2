@extends('layout.app')
@section('title', 'Berita')
@section('content')
@include('components.header')

<section class="berita ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Berita</h1>
            </div>
        </div>
    </div>
</section>

@include('components.footer')
@endsection