
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title}}</h2>
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali ke blog</a>
@endsection