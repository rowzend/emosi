@extends('layouts.main')
@section('container-fluid')
<h1 class="mb-3">{{ $identitasb->title }}</h1>
<hr class=mt-2 "featurette-divider">
<p> By. <a href="#" class="text-decoration-none">{{$identitasb->user->name}}</a> in <a href="/categories/{{$identitasb->category->slug}}">{{ $identitasb->category->nama}}</a></p>

{{$identitasb->body}}

 <hr class=mt-2 "featurette-divider">
<a href="/identitas">Kembali Ke Informasi</a>
@endsection