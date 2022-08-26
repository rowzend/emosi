@extends('layouts.main')
@section('container-fluid')
<h1>Kategori :{{$category}}</h1>
<hr class=mt-2 "featurette-divider">

@foreach ($mutasi as $mutasib)
<article>
    <h2><a href="/mutasi/{{$mutasib->slug}}">{{ $mutasib->title }}</a></h2>
    <p>{{ $mutasib->excerpt }}</p>
</article>
@endforeach

<hr class=mt-2 "featurette-divider">

@endsection