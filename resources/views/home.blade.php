@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center mt-8">Posts</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        @foreach ($posts as $post)
            <div class="card w-full bg-base-100 shadow-xl">
                <figure>
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $post->title }}
                    </h2>
                    <p>{!! $post->body !!}</p>
                    <div class="card-actions justify-end">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
