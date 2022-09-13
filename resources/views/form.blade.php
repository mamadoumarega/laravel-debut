@extends('layouts.app')

@section('content')
    <h1 class="container mx-auto">Créer un nouveau post</h1>

    <form method="post" action="{{ route('posts.store') }}" class="space-y-4">
        @csrf
        <label>
            <input type="text" name="title" class="border-gray-600 border-2 block">
        </label>
        <label>
            <textarea name="content" cols="30" rows="10" class="border-gray-600 border-2 block"></textarea>
        </label>
        <button type="submit" class="btn bg-blue-500">Créer</button>
    </form>
@endsection
