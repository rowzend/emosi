@extends('layouts.main')
@section('container-fluid')
<h1>Daftar Kategori</h1>
<hr class=mt-2 "featurette-divider">

@foreach ($categories as $category)
<ul>
<li>
<h2><a href="/categories/{{$category->slug}}">{{ $category->nama }}</a></h2>
</li>
</ul>
@endforeach

<hr class=mt-2 "featurette-divider">

@endsection