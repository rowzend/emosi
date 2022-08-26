@extends('layouts.main')
@section('container-fluid')
<h1 class="mb-3">{{ $kepangkatanb->title }}</h1>
<hr class= mt-2 "featurette-divider">
<p> By. <a href="#" class="text-decoration-none">{{$kepangkatanb->user->name}}</a> in <a href="/categories/{{$kepangkatanb->category->slug}}">{{ $kepangkatanb->category->nama}}</a></p>

{{$kepangkatanb->body}}

<hr class= mt-2 "featurette-divider">
<a href="/kepangkatan">Kembali Ke Informasi</a>
@endsection