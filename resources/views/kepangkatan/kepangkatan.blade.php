@extends('layouts.main')
@section('container-fluid')
    <div class="text-center"> <h1>PROMOSI ASN</h1> </div>
    <hr class=mt-2 "featurette-divider">
    @if ($kepangkatan->count())
        <div class="card mb-4 mt-3">
            <img src="# {{ $kepangkatan[0]->category->nama }}" class="card-img-top"
                alt="{{ $kepangkatan[0]->category->nama }}">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $kepangkatan[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="#" class="text-decoration-none">{{ $kepangkatan[0]->user->name }}</a> in <a
                            href="/categories/{{ $kepangkatan[0]->category->slug }}"
                            class="text-decoration-none">{{ $kepangkatan[0]->category->nama }}</a>
                        {{ $kepangkatan[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $kepangkatan[0]->excerpt }}</p>

                <a href="/kepangkatan/{{ $kepangkatan[0]->slug }}" class="text-decoration-none btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Kosong mas/mbak!! </p>
    @endif

    <div class="container-fluid">
        <div class="row">
            @foreach ($kepangkatan->skip(1) as $kepangkatanb)
                <div class="col-md-4 mb-3 mt-3">
                    <div class="card">
                    <div class="position-absolute px-3 py-2 text-light" style="background-color:rgba(0,0,0,0.5)"> {{ $kepangkatanb->category->nama }} </div>
                        <img src="# {{ $kepangkatanb->category->nama }}" class="card-img-top"
                            alt="{{ $kepangkatanb->category->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kepangkatanb->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="#" class="text-decoration-none">{{ $kepangkatanb->user->name }}</a>
                                    {{ $kepangkatanb->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $kepangkatanb->excerpt }}</p>
                            <a href="/kepangkatan/{{ $kepangkatanb->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  {!! $kepangkatan->withQueryString()->links('pagination::bootstrap-5') !!}
    <hr class=mt-2 "featurette-divider">
@endsection
