@extends('layouts.main')
@section('container-fluid')
    <div class="text-center"> <h1>MUTASI (PINDAH-DATANG) ASN</h1> </div>
    <hr class=mt-2 "featurette-divider">
    @if ($mutasi->count())
        <div class="card mb-4 mt-3">
            <img src="# {{ $mutasi[0]->category->nama }}" class="card-img-top"
                alt="{{ $mutasi[0]->category->nama }}">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $mutasi[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="#" class="text-decoration-none">{{ $mutasi[0]->user->name }}</a> in <a
                            href="/categories/{{ $mutasi[0]->category->slug }}"
                            class="text-decoration-none">{{ $mutasi[0]->category->nama }}</a>
                        {{ $mutasi[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $mutasi[0]->excerpt }}</p>

                <a href="/mutasi/{{ $mutasi[0]->slug }}" class="text-decoration-none btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Kosong mas/mbak!! </p>
    @endif

    <div class="container-fluid">
        <div class="row">
            @foreach ($mutasi->skip(1) as $mutasib)
                <div class="col-md-4 mb-3 mt-3">
                    <div class="card">
                    <div class="position-absolute px-3 py-2 text-light" style="background-color:rgba(0,0,0,0.5)"> {{ $mutasib->category->nama }} </div>
                        <img src="# {{ $mutasib->category->nama }}" class="card-img-top"
                            alt="{{ $mutasib->category->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mutasib->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="#" class="text-decoration-none">{{ $mutasib->user->name }}</a>
                                    {{ $mutasib->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $mutasib->excerpt }}</p>
                            <a href="/mutasi/{{ $mutasib->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  {!! $mutasi->withQueryString()->links('pagination::bootstrap-5') !!}
    <hr class=mt-2 "featurette-divider">
@endsection
