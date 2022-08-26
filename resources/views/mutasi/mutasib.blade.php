@extends('layouts.main')
@section('container-fluid')
<h1 class="mb-3">{{ $mutasib->title }}</h1>
<hr class=mt-2 "featurette-divider">
<p> By. <a href="#" class="text-decoration-none">{{$mutasib->user->name}}</a> in <a href="/categories/{{$mutasib->category->slug}}">{{ $mutasib->category->nama}}</a></p>

{{$mutasib->body}}

 <hr class=mt-2 "featurette-divider">
<a href="/mutasi">Kembali Ke Informasi</a>
@endsection