@extends('layouts.main')

@section('container')
<H1>HALAMAN About</H1>
<h3> {{ $name }} </h3>
<p>{{ $email }}</p>
<img src="img/<?php echo $image; ?>" alt="{{ $name }}" width="200">

@endsection

