@extends('layouts.main')
@section('container-fluid')
    <div class="text-center"> <h1>IDENTITAS KEPEGAWAIAN ASN</h1> </div>
    <hr class=mt-2 "featurette-divider">
    @if ($identitas->count())
        <div class="card mb-4 mt-3">
            <img src="# {{ $identitas[0]->category->nama }}" class="card-img-top"
                alt="{{ $identitas[0]->category->nama }}">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $identitas[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        By. <a href="#" class="text-decoration-none">{{ $identitas[0]->user->name }}</a> in <a
                            href="/categories/{{ $identitas[0]->category->slug }}"
                            class="text-decoration-none">{{ $identitas[0]->category->nama }}</a>
                        {{ $identitas[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $identitas[0]->excerpt }}</p>

                <a href="/identitas/{{ $identitas[0]->slug }}" class="text-decoration-none btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Kosong mas/mbak!! </p>
    @endif

    <div class="container-fluid">
        <div class="row">
            @foreach ($identitas->skip(1) as $identitasb)
                <div class="col-md-4 mb-3 mt-3">
                    <div class="card">
                    <div class="position-absolute px-3 py-2 text-light" style="background-color:rgba(0,0,0,0.5)"> {{ $identitasb->category->nama }} </div>
                        <img src="# {{ $identitasb->category->nama }}" class="card-img-top"
                            alt="{{ $identitasb->category->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $identitasb->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="#" class="text-decoration-none">{{ $identitasb->user->name }}</a>
                                    {{ $identitasb->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $identitasb->excerpt }}</p>
                            <a href="/identitas/{{ $identitasb->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  {!! $identitas->withQueryString()->links('pagination::bootstrap-5') !!}
    <hr class=mt-2 "featurette-divider">
@endsection
