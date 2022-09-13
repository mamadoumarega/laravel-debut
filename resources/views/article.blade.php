@extends('layouts.app')


@section('content')
    <h1>{{ $post->content }}</h1>

    <hr>

    @forelse($post->comments as $comment)
        <div>{{ $comment->content }} crée le {{ $comment->created_at->format('d/m/y') }}</div>
    @empty
        <sapn>Aucun commentaire pour ce post</sapn>
    @endforelse
@endsection
