

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Blog Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ Str::limit(strip_tags($post->body), 100) }}</p>
                    <a href="" class="text-blue-500 hover:underline">Read more</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

