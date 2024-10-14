@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center mt-8">Posts</h1>

    <div class="w-full px-4 mt-8">
        <div class="card w-full bg-base-100 shadow-xl">
            <figure>
                <img src="{{ asset('storage/' . $post->image_url) }}" alt="img-broken" class="w-full h-48 object-cover">
            </figure>
            <div class="card-body">
                <h2 class="card-title">
                    {{ $post->title }}
                </h2>
                <p>{!! $post->body !!}</p>
{{--                <div class="card-actions justify-end">--}}
{{--                    <a href="/{{ $post->slug }}" class="btn btn-primary">Read More</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
